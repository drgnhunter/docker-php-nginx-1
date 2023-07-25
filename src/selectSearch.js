Vue.component('search-select', {
            props: [
                'options',
                'filterMethod'
            ],

            data() {
                return {
                    query: ''
                }
            },

            computed: {
                results() {
                    return this.filterMethod(this.options, this.query)
                }
            },

            methods: {
                setQuery(event) {
                    this.query = event.target.value
                }
            },

            render() {
                return this.$scopedSlots.default({
                    results: this.results,
                    searchList: (event) => {
                        this.setQuery(event)
                    }
                })
            }
        })

        const options = [
            "Inside Out",
            "John Wick",
            "Jurassic World",
            "The Lord of the Rings",
            "Pacific Rim",
            "Pirates of the Caribbean",
            "Planet of the Apes",
            "Saw",
            "Sicario",
            "Zombies"
        ]

        Vue.component('autocomplete', {
            data() {
                return {
                    dropdownVisible: false
                }
            },

            methods: {
                filterMethod(options, query) {
                    return options.filter(option => option.toLowerCase().includes(query.toLowerCase()))
                },

                showDropdown() {
                    this.dropdownVisible = true
                },

                hideDropdown() {
                    this.dropdownVisible = false
                }
            },

            template: `
    <search-select
      :options="options"
      :filterMethod="filterMethod"
    >
      <div slot-scope="{ results, searchList }">
        <div class="autocomplete">
          <input
            type="text"
            placeholder="Type to search list"
            @input="searchList"
            @focus="showDropdown"
            @blur="hideDropdown"
          />
          <div class="autocomplete-dropdown" v-if="dropdownVisible">
            <ul class="autocomplete-search-results-list">
              <li 
                class="autocomplete-search-result"
                v-for="result in results"
                :key="result"
              >
                {{ result }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </search-select>
  `
        })

        Vue.component('tag-list-search', {
            methods: {
                filterMethod(options, query) {
                    return options.filter(option => option.toLowerCase().includes(query.toLowerCase()))
                }
            },

            template: `
    <search-select
      :options="options"
      :filterMethod="filterMethod"
    >
      <div slot-scope="{ results, searchList }">
        <div class="tag-list-search">
          <input
            type="text"
            placeholder="Type to search list"
            @input="searchList"
          />
          <ul class="tag-list">
            <li 
              class="tag"
              v-for="result in results"
              :key="result"
            >
              {{ result }}
            </li>
          </ul>
        </div>
      </div>
    </search-select>
  `
        })

        const app = new Vue({
            el: '#app'
        })