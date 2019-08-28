
    <!-- overview-main -->
    <div class="c-project__body">
        <p>Rollbar is a real-time error alerting and debugging tool for software developers.</p>
        <p>I led the design effort to create a new view in the web app that provides users visibility into errors across multiple Rollbar projects.</p>
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
                <div class="overview-content">
                    <!-- c-project-sidebar -->
                    <p>The Account Dashboard is a new view in the Rollbar web app specifically designed to give engineers and managers a complete picture of all active projects. </p>
                    <h4>Challenge</h4>
                    <p>Many Rollbar users are developing products composed of numerous applications and services, but without a comprehensive overview of these separate Rollbar projects it's difficult to see the overall health of an application. </p>
                    <p>Customer goals:</p>
                    <ul>
                    <li>Provide greater leverage to engineering teams for mitigating expensive failures.</li>
                    <li>Shorten the time it takes to solve complex issues.</li>
                    <li>Increase engineering team efficiency.</li>
                    </ul>
                    <h4>Solution</h4>
                    <p>Starting with a simple prototype that aggregated project data onto a single view, we tested the interface with a small number of customers. One of the most interesting outcomes of these tests is that we discovered there were two distinct use cases: <em>reporting</em>, and <em>triage</em>. One group of users wanted to see easily configurable reports of overall status, the other group wanted a way to quickly locate problem areas to solve problems more efficiently. For the initial version of the view we decided to provide a basic tool that would solve both problems.</p>
                    <ul>
                    <li>Provide a dedicated view showing all the projects in an account.</li>
                    <li>Present a clear visual representation of the health of selected projects.</li>
                    <li>Surface all filters available in the individual project view, making it easy to for teams to drill down into issues across languages, environments, and error levels.</li>
                    </ul>
                    <h4>Results</h4>
                    <p>The first release of the Account Dashboard helped Rollbar customers achieve their previously unmet goals immediately. By providing insight into individual trends alongside potential correlated patterns, engineering teams could now quickly see how performance of various applications and services affects the health of their overall product. When a team can more efficiently triage and solve errors in complex systems they are more effective at maintaining high quality experience for their users.</p>
                    <div class="c-panel"><p>&ldquo;The Account Dashboard makes it even easier than before to understand the overall health of the Instacart product as well as individual teams/systems that make up Instacart. It also makes it dead simple to know where our engineering time has the highest leverage regarding issues affecting our customers and shoppers.&rdquo;</p>
                    <p>&mdash;Jason Kozemczak, Tech Lead at Instacart</p></div>
                    <h4>Demo</h4>
                    <p>You can view a limited demo of the Account Dashboard in the Rollbar Demo account <a href="https://rollbar.com/demo/?level=30%2C40%2C50&duration=24h&tz=US%2FPacific&sort=total&order=desc" title="Rollbar Demo" target="_blank" rel="noopener noreferrer">here</a>.</p>
                    <div class="c-link-pagination">
                        <a class="c-link-pagination--next" href="#process">See Process &amp; Artifacts</a>
                    </div>
                </div>
            </li>
            <li class=""  id="processTab">
                <div class="overview-content">
                    <h4>Existing Situation</h4>
                    <p>Where is Rollbar product before this new feature?</p>
	                <p>What are customers saying?</p>
	                <p>What is our hypothesis (even if it’s the same as above)?</p>

                    <h4 id="approach">Approach</h4>
                    <p><em>Research, analysis, exploration.</em></p>
                    <p>Simple UX project plan</p>
	                <p>Customer interviews</p>
	                <p>Discovery exercises</p>
	                <p>Affinity mapping</p>

                    <h4 id="ideas">Ideas &amp; Experiments</h4>
                    <p>Design concepts TK</p>

                    <h4 id="learning">Learning &amp; Unexpected Insights</h4>
                    <p>Customers did not want to see more than a week</p>

                    <h4 id="solution">Solution</h4>
                    <p>TK</p>

                    <h4 id="upshot">Upshot</h4>
                    <p>Top customers immediately started telling us even this basic MVP was massively useful to them (qual); commitment to product strengthened (quant)</p>
                    <p>Isolating specific task flows and simplifying them provided much higher value metrics on user behavior across reporting and triage features</p>
                    <p>New design processes tested in real-world; design team empowered to explore concepts and experiment with features; product and engineering now able to collaborate more seamlessly with design than before
                    </p>

                    <!-- start placeholder for section with imagebox -->
                    <hr>
                    <h5>h5</h5>
                    <p>paragraph placeholder</p>
                    <!-- solanolabs-sessionview-research-notations -->
                    <div class="c-imagebox">
                        <a href="#" data-reveal-id="solanolabs-sessionview-research-notations">
                            <img srcset="/images/solanolabs-sessionview-research-notations_small.jpg 400w,
                        /images/solanolabs-sessionview-research-notations_medium.jpg 800w,
                        /images/solanolabs-sessionview-research-notations_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/solanolabs-sessionview-research-notations_medium.jpg" alt="<?php echo $slcs; ?> - Research Notes on v1.5 Layouts" title="<?php echo $slcs; ?> - Research Notes on v1.5 Layouts">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $slcs; ?> - Research Notes on v1.5 Layouts <span class="hide-for-small">/ <a href="#" data-reveal-id="solanolabs-sessionview-research-notations">View Larger Image</a></span></p>
                    <hr>

                    <!-- end placeholder for section with imagebox -->

                    <p><a class="link--to-top" href="#">TOP</a></p>
                    
                    <div class="c-link-pagination">
                                <!-- <a class="c-link-pagination" href="#overview" onclick="$('.tabs a[href=\'#overview\']').click()">Read Project Overview</a> -->
                                <a class="c-link-pagination--prev" href="#overview">Read Project Overview</a>
                    </div>

                </div>
            </li>
        </ul>
    </div>
