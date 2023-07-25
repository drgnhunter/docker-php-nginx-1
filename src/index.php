<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngator Learning Student Portal</title>
    <link rel="stylesheet" href="stylesheets/bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/node_modules/aos/dist/aos.css" />
    <link rel="stylesheet" href="/node_modules/atropos/atropos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="stylesheets/selectSearch.css" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
</head>

<body>




    <section class="login-container overflow-x-hidden">
        <article class="login-side-bg"></article>
        <article class="form-container">
            <!-- <div class="intro">
                <h1>Welcome Back</h1>
                <p>Welcome Back, Please Enter Your details</p>
            </div> -->

            <!-- <form onsubmit="return false;" class="form">
                <div class="email-input">
                    <span class="material-icons-round icon-size"> mail_outline </span>
                    <span id="seperator"></span>
                    <div class="input-container">
                        <p class="sub-title">Email Address</p>
                        <input type="email" name="usermail" id="email" />
                    </div>
                </div>

                <div class="email-input">
                    <span class="material-icons-round icon-size"> password </span>
                    <span id="seperator"></span>
                    <div class="input-container">
                        <p class="sub-title">Password</p>
                        <input type="password" name="userpass" id="password" />
                    </div>
                </div>

                <button id="submit">Continue</button>
            </form> -->
            <section class=" col-9">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-12 order-2 order-lg-1 ">

                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                            <form class="">

                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">

                                                        <div class=" hstack gap-2">

                                                            <div class=" vstack">
                                                                <label class="form-label" for="form3Example1c">First Name</label>
                                                                <input id="fname" type="text" class="form-control" />
                                                            </div>
                                                            <div class=" vstack">
                                                                <label class="form-label" for="form3Example1c">Last Name</label>

                                                                <input id="lname" type="text" class="form-control" />
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class=" vstack">
                                                        <div class="form-outline flex-fill mb-0">
                                                            <div class=" vstack d-none">
                                                                <select class=" form-select">
                                                                    <?php
                                                                    $study_place_rs = Database::search("SELECT * FROM `student_place` ");
                                                                    $study_place_num = $study_place_rs->num_rows;

                                                                    for ($a = 0; $a < $study_place_num; $a++) {
                                                                        $study_place_data = $study_place_rs->fetch_assoc();
                                                                    ?>
                                                                        <option value="<?php echo ($study_place_data["studying_place"]); ?>"><?php echo ($study_place_data["studying_place"]); ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <!--search select-->
                                                            <div id="app">
                                                                <div class="wrapper">
                                                                    <div class="example">
                                                                        <label class="form-label" for="form3Example3c">University / Institute/ School</label>
                                                                        <autocomplete></autocomplete>
                                                                    </div>
                                                                    <div class="example d-none ">
                                                                        <h2>Tag List Search</h2>
                                                                        <tag-list-search></tag-list-search>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--search select-->

                                                            <div class="row d-none">
                                                                <div class="col-md-3">&nbsp;</div>
                                                                <div class="col-md-6">
                                                                    <select name="select_box" class="form-select" id="select_box">
                                                                        <option value="">Select Country</option>
                                                                        <?php
                                                                        $study_place_rs = Database::search("SELECT * FROM `student_place` ");
                                                                        $study_place_num = $study_place_rs->num_rows;

                                                                        for ($a = 0; $a < $study_place_num; $a++) {
                                                                            $study_place_data = $study_place_rs->fetch_assoc();
                                                                        ?>
                                                                            <option value="<?php echo ($study_place_data["studying_place"]); ?>"><?php echo ($study_place_data["studying_place"]); ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">&nbsp;</div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class=" vstack">
                                                        <div class="form-outline flex-fill mb-0">
                                                            <label class="form-label" for="form3Example3c">Email</label>
                                                            <input type="email" id="email" class="form-control" />

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class=" vstack">
                                                        <label class="form-label" for="form3Example3c">Mobile</label>

                                                        <div class="form-outline flex-fill mb-0">
                                                            <input type="mobile" id="mobile" class="form-control" />

                                                        </div>
                                                    </div>


                                                </div>

                                                <label class="form-label" for="form3Example4c">Password</label>

                                                <div class="d-flex flex-row align-items-center mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" id="password" class="form-control" />
                                                    </div>
                                                    <i id="p_icon" onclick="viewPasssword();" class="bi bi-eye-slash me-3 "></i>
                                                </div>

                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>

                                                <div class="d-flex flex-row align-items-center  mb-4">

                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" id="password2" class="form-control" />

                                                    </div>
                                                    <i id="p_icon2" onclick="viewRPassword();" class="bi bi-eye-slash me-3 "></i>
                                                </div>
                                                <!-- 
                                                <div class="form-check d-flex justify-content-center mb-5">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                                    <label class="form-check-label" for="form2Example3">
                                                        I agree all statements in <a href="#!">Terms of service</a>
                                                    </label>
                                                </div> -->

                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button onclick="registerStudent();" type="button" class="btn btn-primary btn-lg">Register</button>
                                                </div>

                                            </form>
                                            <!-- <article class="outro">
                                                <div class="ending">
                                                    <p>Or Continue With</p>
                                                </div>

                                                <div style="display: flex;  justify-content: center;align-items: center; " class="  flex-row justify-content-center socials">
                                                    <a class="social-btn" href="" id="g-btn">
                                                        <p>Google</p>
                                                    </a>
                                                    <a style="flex:0;" class="social-btn" href="" id="a-btn">
                                                        <p>Apple</p>
                                                    </a>
                                                    <a style="flex:0;" class="social-btn" href="" id="fb-btn">
                                                        <p>Facebook</p>
                                                    </a>
                                                </div>
                                            </article> -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </article>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

    <script>
        $(function() {
            $('.selectpicker').selectpicker();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script>
        Vue.component('search-select', {
            props: [
                'options',
                'filterMethod'
            ],

            data() {
                fetch('https://www.ngator.com/learning/searchStudentPlaces.php')
                    .then(response => response.json())
                    .then(data => {
                        this.options = data; // Overwrite the options array with the fetched data
                        console.log(this.options);
                    })
                    .catch(error => console.error(error));
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
                },
                handleSelected(result) {
                    // Handle the selected result here
                    console.log('Selected:', result);
                },
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
        ];



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
                },
                handleClick(result) {
                    // Code to execute when the button is clicked
                    console.log(result);
                    document.getElementById("studying_place").value = result;
                    this.hideDropdown();
                },
               
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
            id="studying_place"
          />
          <div class="autocomplete-dropdown" v-if="dropdownVisible">
            <ul id="study_place" class="autocomplete-search-results-list">
              <li 
                class="autocomplete-search-result"
                v-for="result in results"
                :key="result"
                @click="handleClick(result)"
                :data-studying-place="result"
              >
                {{ result }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </search-select>
  `
        });

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
            el: '#app',
            data: {
                options: [] // This is where you will store your fetched data
            },
            created() {
                fetch('http://localhost/ngator/learning/searchStudentPlaces.php')
                    .then(response => response.json())
                    .then(data => {
                        this.options = data; // Overwrite the options array with the fetched data
                        console.log(this.options);
                    })
                    .catch(error => console.error(error));
            }
        })
    </script>

    <script src="script.js"></script>



</body>

</html>