<div class="container-fluid no-gutter pt" id="work">
    <div class="row ">
        <div class="col-lg-6 col-lg-offset-3 centered">
            <h3>My work & projects</h3>
            <hr>
            <p>Click on a project to learn more!</p>
        </div>
    </div>
    <?php
      $data = $_SESSION['dataProject'];
      if($data == true)
      {
        ?>
        <script>
            $(window).on("load", function() {
                $("#ml").click();
                $('#workAnchor')[0].click();
            });
        </script>
        <?php
        $_SESSION['dataProject'] = false;
      }
    ?>
    <div class="row  centered">
        <div id="filters" class="button-group">
            <button class="btn btn-colin" data-filter="*">Show all</button>
            <button class="btn btn-colin" data-filter=".web">Web</button>
            <button class="btn btn-colin" data-filter=".design">Design/Conception</button>
            <button id="ml" class="btn btn-colin" data-filter=".ml">Machine Learning</button>
            <button class="btn btn-colin" data-filter=".dev">Dev</button>
            <button class="btn btn-colin" data-filter=".other">Other</button>
            <button class="btn btn-colin" data-filter=".personal">Personal</button>
        </div>
        <br/>

        <div id="posts" class="row">
            <div id="1" class="item dev col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" data-toggle="modal" href="./assets/projects/BOULDER.pdf">
                        <img class="img-responsive" src="assets/img/portfolio/boulder-dash.png"
                             alt="Boulder Dash report"/>
                    </a>

                    <p>
                        <a href="https://github.com/valeriansaliou/boulder-dash">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="./assets/projects/BOULDER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Github">
                        </a>
                    </p>

                    <h3>Boulder Dash</h3>

                    <p>Clone of <a href="https://fr.wikipedia.org/wiki/Boulder_Dash" target="new">Boulder Dash</a>, done
                        in
                        <b>Java</b>, use of MVC pattern.</p>
                </div>
            </div>
            <div id="2" class="item dev web design col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="http://srv-php-voeux.colinleverger.fr" rel="nofollow" target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/srv.png" alt="Serveur de voeux"/>
                    </a>
                    <p>
                        <a href="https://github.com/ColinLeverger/srv-php-voeux">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="./assets/projects/WISHES.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                        <a href="http://srv-php-voeux.colinleverger.fr">
                            <img class="icons" width="40" height="40" src="assets/img/logos/link.png" alt="Link">
                        </a>
                    </p>

                    <h3>Wishes Server</h3>

                    <p>Website coded using <b>CodeIgniter</b>, <b>PHP</b>, <b>Javascript / AJAX</b>.</p>

                    <p>IDs to play: USERNAME: <em>bvozel</em>, PASSWORD: <em>servicesENSSAT</em></p>
                </div>

            </div>
            <div id="3" class="item design design col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/UML-COLIN-LEVERGER.pdf" rel="follow" target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/uml.png" alt="UML project"/>
                    </a>

                    <p>
                        <a href="assets/projects/UML-COLIN-LEVERGER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Entire Conception of Product</h3>

                    <p>Use of <b>UML</b> and <b>UP</b> methodologies to design a fictive application.</p>

                    <p>The product is an app which will rationalize the means of transports in a city.</p>
                </div>
            </div>
            <div id="4" class="item dev col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/GRAPHS-COLIN-LEVERGER.pdf" rel="follow" target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/graphs.png" alt="Graphs project"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/graphs-scala">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="assets/projects/GRAPHS-COLIN-LEVERGER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Warshall Algorithms</h3>

                    <p>Use of <b>Scala</b>, <b>SBT</b> and <b>Git</b>. Tests provided in "src/test" (eh, we are not
                        uncivilized here, just trying to do a little DevOps...)</p>
                </div>
            </div>
            <div id="5" class="item dev col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/BDD.pdf" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/travel.png" alt="Travel"/>
                    </a>

                    <p>
                        <a href="assets/projects/BDD.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                        <a href="assets/projects/BDD_CODE.sql">
                            <img class="icons" width="40" height="40" src="assets/img/logos/link.png" alt="Link">
                        </a>
                    </p>

                    <h3>Travel Agency's Database</h3>

                    <p>School project; subject: creation of a fictive travel agency's database. Modeling of the
                        database with entity/relationship models.</p>

                    <p>Use of <b>MySQL</b> (stored procedures, triggers, views...).</p>
                </div>
            </div>
            <div id="6" class="item dev ml col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/EIGENFACES-COLIN-LEVERGER.pdf" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/eigenfaces.png"
                             alt="Eigenfaces project"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/eigenfaces-matlab">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="assets/projects/EIGENFACES-COLIN-LEVERGER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Eigenfaces with Matlab</h3>

                    <p>Use of <b>Matlab</b> to develop face recognition with the Eigenfaces.</p>
                </div>
            </div>
            <div id="7" class="item web dev personal col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="http://colinleverger.github.io/jmeter-tutorial/#/" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/jmeter.png" alt="JMeter"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/jmeter-tutorial">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="http://colinleverger.github.io/jmeter-tutorial/#/">
                            <img class="icons" width="40" height="40" src="assets/img/logos/link.png" alt="Link">
                        </a>
                    </p>

                    <h3>JMeter Tutorial</h3>

                    <p>Presentation & tutorial about JMeter: the basis.</p>

                    <p>Use of <b>reveal.js</b> / <b>HTML</b>.</p>
                </div>
            </div>

            <div id="8" class="item dev col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="https://github.com/ColinLeverger/VaultChat.git" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/vaultchat.png" alt="Vault Chat"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/VaultChat.git">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                    </p>

                    <h3>VaultChat</h3>

                    <p>School project; subject: decentralized and distributed system. Communication
                        between fictive atomics shelters. Use of critical section and mutex to make the communications
                        secure and parallel.</p>

                    <p>Use of <b>Java</b> and <b>Java RMI</b>.</p>
                </div>
            </div>
            <div id="9" class="item dev col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/CANNY-COLIN-LEVERGER.pdf" rel="follow" target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/lena.png" alt="Lena"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/canny-algorithm">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="assets/projects/CANNY-COLIN-LEVERGER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Canny Edge Detector</h3>

                    <p>Use of <b>Scilab</b> to do a little bit of image processing, with the Canny's algorithm.</p>
                </div>
            </div>
            <div id="10" class="item dev ml conception col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/ML.pdf" rel="follow" target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/ml-python.png" alt="ML"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/machine-learning-python">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="assets/projects/ML.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Machine Learning Algorithms</h3>

                    <p>Use of <b>Python</b> & <b>Scikit</b> lib to experiment with machine learning algorithms, such as
                        Linear regression, Trees, Random Forests... Work in pairs with Anais GALISSON.</p>
                </div>
            </div>
            <div id="11" class="item dev web col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="http://colinleverger.github.io/solar-system-webgl/" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/solar-system.png"
                             alt="Solar system"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/solar-system-webgl">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="assets/projects/SOLAR-SYSTEM-COLIN-LEVERGER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                        <a href="http://colinleverger.github.io/solar-system-webgl/">
                            <img class="icons" width="40" height="40" src="assets/img/logos/link.png" alt="Link">
                        </a>
                    </p>

                    <h3>Solar System Simulation</h3>

                    <p>Use of <b>Javascript</b>, <b>HTML/CSS</b> and <b>OpenGL</b> to develop a solar system simulation.
                    </p>
                </div>
            </div>
            <div id="12" class="item design web col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/ERGO-COLIN-LEVERGER.pdf" rel="follow" target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/ergo.png" alt="Ergo"/>
                    </a>

                    <p>
                        <a href="assets/projects/ERGO-COLIN-LEVERGER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Ergonomy & Website Design</h3>

                    <p>Use of <b>Sketch</b> to design a website for an association.</p>
                    <p>In this project, the goal was more to think about choices of implementation & designs than coding
                        the website itself.</p>
                </div>
            </div>
            <div id="13" class="item design col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/SWITCHUP-CHALLENGE-ZOM-ENSSAT.pdf" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/switchup.png" alt="Switchup"/>
                    </a>

                    <p>
                        <a href="assets/projects/SWITCHUP-CHALLENGE-ZOM-ENSSAT.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Switchup Challenge Cisco</h3>

                    <p>Cisco innovation challenge. Main goal: think about society/environment problems, and imagine a
                        product or a service to solve this problem. In three words: change the world!</p>
                    <p>Team of 6 persons from ENSSAT engineering school.</p>
                </div>
            </div>
            <div id="14" class="item other col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="http://astep.management.enssat.fr" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/astep.png" alt="ASTEP"/>
                    </a>

                    <p>
                        <a href="http://astep.management.enssat.fr">
                            <img class="icons" width="40" height="40" src="assets/img/logos/link.png"
                                 alt="Website of ASTEP">
                        </a>
                    </p>

                    <h3>Management at ENSSAT: ASTEP</h3>

                    <p>Management project at ENSSAT. I was teaching computing science at primary school.
                        Group of ~25 children, from 8 to 10. We prepared our interventions during one year: exercises,
                        pedagogy,...</p>
                    <p>Use of <b>Scratch</b> to give basis of programming.</p>
                </div>
            </div>
            <div id="15" class="item other personal col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="assets/projects/load_testing_fundamentals.pdf" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/perf.png" alt="Performance testing"/>
                    </a>

                    <p>
                        <a href="assets/projects/load_testing_fundamentals.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                    </p>

                    <h3>Load Testing Fundamentals</h3>

                    <p>Article concerning the Load testing fundamentals - state of the art.</p>
                    <p>Information about processes, tools and methods used in load testing.</p>
                </div>
            </div>
            <div id="16" class="item dev ml col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="https://colinleverger.github.io/speed-dating-experiment-r/" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/speed-dating.png"
                             alt="Speed Dating"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/speed-dating-experiment-r">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                        <a href="assets/projects/BIBA-COLIN-LEVERGER.pdf">
                            <img class="icons" width="40" height="40" src="assets/img/logos/book.png" alt="Report">
                        </a>
                        <a href="https://colinleverger.github.io/speed-dating-experiment-r/">
                            <img class="icons" width="40" height="40" src="assets/img/logos/link.png" alt="Link">
                        </a>
                        <a href="https://www.kaggle.com/colinleverger/d/annavictoria/speed-dating-experiment/exploring-the-speed-dating-dataset/">
                            <img class="icons" width="40" height="40" src="assets/img/logos/kaggle-logo.png" alt="Link">
                        </a>
                    </p>

                    <h3>Speed Dating Experiment</h3>

                    <p>Use of <b>R</b>, <b>Neo4j</b> and <b>Gephi</b> to analyse a Dataset concerning some Speed Dating
                        events.</p>
                </div>
            </div>
            <div id="17" class="item dev personal col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="https://github.com/ColinLeverger/quick-setup-debian-server" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/devops.png"
                             alt="DevOps"/>
                    </a>

                    <p>
                        <a href="https://github.com/ColinLeverger/quick-setup-debian-server">
                            <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                                 alt="Github">
                        </a>
                    </p>

                    <h3>Quick Setup Debian Server</h3>

                    <p>Use of <b>Ansible</b> to script and automate the configuration of a blank Debian 8 server
                        with only one command.</p>
                </div>
            </div>
            <div id="18" class="item design other col-lg-4">
                <div class="item-wrap">
                    <a class="zoom green" href="http://english.ida.dk/" rel="follow"
                       target="new">
                        <img class="img-responsive" src="./assets/img/portfolio/ida.jpg"
                             alt="DevOps"/>
                    </a>

                    <p>
                        <a href="http://english.ida.dk/">
                            <img class="icons" width="40" height="40" src="assets/img/logos/link.png"
                                 alt="Website">
                        </a>
                    </p>

                    <h3>Junior System Architect, IDA</h3>

                    <p>Work for a Danish Union for Engineers during 3 months as a Junior System Architect to study the feasability of
                      a migration between different Microsoft products.</p>
                </div>
            </div>
            <div id="19" class="item dev ml personal col-lg-4">
              <a class="zoom green" href="https://github.com/ColinLeverger/titanic-r" rel="follow"
                 target="new">
                  <img class="img-responsive" src="./assets/img/portfolio/titanic.jpg"
                       alt="Speed Dating"/>
              </a>

              <p>
                  <a href="https://github.com/ColinLeverger/titanic-r">
                      <img class="icons" width="40" height="40" src="assets/img/logos/github-logo.png"
                           alt="Github">
                  </a>
                  <a href="https://www.kaggle.com/c/titanic">
                      <img class="icons" width="40" height="40" src="assets/img/logos/kaggle-logo.png" alt="Link">
                  </a>
              </p>

              <h3>Titanic & Machine Learning</h3>

              <p>Use of <b>R</b> to analyse a Dataset concerning the sinking of the Titanic. Machine Learning models
              used to predict the survivors of the crash.</p>
            </div>
        </div>
    </div>
    <!-- /container -->
</div>
