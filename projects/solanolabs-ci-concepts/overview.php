<div class="overview">
    <!-- overview-main -->
    <div class="c-project__body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi modi hic expedita illo, ducimus distinctio repudiandae dicta omnis excepturi deleniti necessitatibus sunt voluptatum eaque, odio earum? Tempore ipsam, sit dicta.</p>
        <ul class="o-tabs" data-tab>
            <li class="o-tabs__tab-title  active">
                <a href="#overview">
                    <?php echo $overview_tab ?>
                </a>
            </li>
            <li class="o-tabs__tab-title ">
                <a href="#process">
                    <?php echo $process_tab ?>
                </a>
            </li>
        </ul>
        <ul class="o-tabs__tab-content">
            <li class="active"  id="overviewTab">
                <!-- overview-sidebar -->
                <!-- <div class="overview-sidebar">
                    <div class="panel radius">
                        <h5> <?php echo $overview_sidebar_heading; ?></h5>
                        <ul class="services">
                            <li>Content Development</li>
                            <li>Information Architecture</a>
                            </li>
                            <li>UX + Interface Design</li>
                            <ul>
                                <li>Wireframes</li>
                                <li>Mockups</li>
                                <ul>
                                    <li>Page Layouts</li>
                                    <li>Typography</li>
                                    <li>Color Scheme</li>
                                </ul>
                            </ul>
                            <li>Front-end Development</li>
                            <ul>
                                <li>Ruby on Rails Views</li>
                                <li>Sass Library</li>
                            </ul>
                        </ul>
                        <span class="services label radius">Built with <?php echo $moovui ?></span>
                    </div>
                </div> -->
                <p>Solano CI is Solano Labs' Continuous Integration SaaS product. It is a powerful suite of tools that enables many different workflows, and therefore has <a href="#" data-reveal-id="solanolabs-session-view_v1-5">a complex user interface</a> that poses tricky user experience challenges.</p>
                <p>The "Report Page"&mdash;formally the Session View&mdash; is the primary view into any given "build" session on Solano CI. It shows every state of a session, from its initial creation, through to a complete collection of test results, build lifecycle timings, and build artifacts. It serves for most users as a way to navigate through their workflow, and view other pieces of information that relate to the state or configuration of the organization and repo. Over time, in an effort to provide as much information and control as possible over a growing number of factors, the interface had become less intuitive for long-time users and not as easily 'learnable' for new users. This causes friction and inefficiency; it is, in a sense, user experience debt.</p>
                <p>The question I asked was: "With so much data and navigation to present in one place, how do we improve the usability of such a complex view?" I went out and sat with users and gathered feedback, reviewed support tickets, and did research into possible workflow improvements.</p>
                <p>This proposed Solano CI Session View redesign presents a new interface and workflow that, as an evolution of the current incremental redesign, solves a much larger set of usability issues uncovered in my research and user testing sessions. </p>
                <p>Here's a video demo showing the intial prototype in action:</p>
                <div class="video-wrapper">
                    <iframe class="vimeo" src="https://player.vimeo.com/video/174725827" width="600" height="353" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <p class="c-imagebox--caption-video">I built this prototype using <a href="https://middlemanapp.com/" target="_blank">Middleman</a> and selected elements of <a href="http://semantic-ui.com/" target="_blank">Semantic UI</a> coupled with my own custom CSS and JavaScript; the video is recorded from a locally running instance of Middleman.</p>
                <p class="c-imagebox--caption">Please note: the video transition between the 'build running' and 'build passed' state does not represent a UI animation, but simply abbreviates the run time in the presentation.</p>
                <!--
              <h4><?php echo $overview_section_a; ?></h4>
              <p>I was hired by Moovweb to create a user-friendly, visually coherent interface for a complex system of tools. The initial v4 build was top-to-bottom redesign of all interfaces as well as a rethinking of all content strategy for developer onboarding (this lead to the creation of the Developer Center). The v5 build was a complete rebuild of the platform with an array of powerful new features which required a rethinking of many interfaces, and provided an opportunity to enhance visual design and user experience on many areas of the system. 
              </p>
              -->
            </li>
            <li class=""  id="processTab">
                <!-- overview-sidebar -->
                <div class="overview-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta totam quas quos alias. Quod a, adipisci sequi modi tenetur saepe, odit ipsa dolorem sed deleniti veritatis consequatur cum temporibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta totam quas quos alias. Quod a, adipisci sequi modi tenetur saepe, odit ipsa dolorem sed deleniti veritatis consequatur cum temporibus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta totam quas quos alias. Quod a, adipisci sequi modi tenetur saepe, odit ipsa dolorem sed deleniti veritatis consequatur cum temporibus!</p>
                </div>
            </li>
        </ul>
    </div>
</div>