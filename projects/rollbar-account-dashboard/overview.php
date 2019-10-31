
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
                    <h4><?php echo $overview_section_a; ?></h4>
                    <p>Many Rollbar users are developing products composed of numerous applications and services, but without a comprehensive overview of these separate Rollbar projects it's difficult to see the overall health of an application. </p>
                    <p>Our goals for improving the Rollbar product:</p>
                    <ul>
                    <li>Provide greater leverage to engineering teams for mitigating expensive failures.</li>
                    <li>Shorten the time it takes to solve complex issues.</li>
                    <li>Increase engineering team efficiency.</li>
                    </ul>
                    <h4><?php echo $overview_section_b; ?></h4>
                    <p>Starting with a simple research-driven proof-of-concept that aggregated project data onto a single view, we tested the interface with a small number of customers. One of the most interesting outcomes of these early tests is that we discovered there were two distinct use cases: <em>reporting</em>, and <em>triage</em>. One group of users wanted to see easily configurable reports of overall status, the other group wanted a way to quickly locate problem areas to solve problems more efficiently. For the initial version of the view we decided to provide a basic tool that would solve both problems. We mapped out plans for a deeper dive into each use case for future versions.</p>
                    <ul>
                    <li>Provide a dedicated view showing all the projects in an account.</li>
                    <li>Present a clear visual representation of the health of selected projects.</li>
                    <li>Surface all filters available in the individual project view, making it easy to for teams to drill down into issues across languages, environments, and error levels.</li>
                    </ul>
                    <h4><?php echo $overview_section_c; ?></h4>
                    <p>The first release of the Account Dashboard helped Rollbar customers achieve their previously unmet goals immediately. By providing insight into individual trends alongside potential correlated patterns, engineering teams could now quickly see how performance of various applications and services affects the health of their overall product. When a team can more efficiently triage and solve errors in complex systems they are more effective at maintaining high quality experience for their users.</p>
                    <div class="c-panel c-panel--assert c-panel__sharp"><p>&ldquo;The Account Dashboard makes it even easier than before to understand the overall health of the Instacart product as well as individual teams/systems that make up Instacart. It also makes it dead simple to know where our engineering time has the highest leverage regarding issues affecting our customers and shoppers.&rdquo;</p>
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
                    <p>Most Rollbar users are developing products composed of numerous applications and services, but without a comprehensive overview of these separate Rollbar projects it's difficult to see the overall health of an application. </p>
                    <h5>Where was Rollbar product before this new feature?</h5>
                    <p>Rollbar’s data model is built around the concept of a project, so any analysis of services composed of multiple projects is very cumbersome. Most users are opening up multiple Items views with custom filters and then tabbing between them. Some are opening up a few Items views and the Deploy view side-by-side.</p> 

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-items-view">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-items-view_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-items-view_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-items-view_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-items-view_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-items-view_medium.jpg" 
                        alt="Items View, the primary UI for viewing comprehensive project activity" 
                        title="Items View, the primary UI for viewing comprehensive project activity">
                        </a>
                    </div>

                    <p class="c-imagebox__caption">
                        Items View, the primary UI for viewing comprehensive project activity<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-items-view">View Larger Image</a></span></p>

                    <!-- end --> 

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-project-dashboard">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-project-dashboard_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-project-dashboard_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-project-dashboard_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-project-dashboard_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-project-dashboard_medium.jpg" 
                        alt="Project Dashboard, the summary view for a project that most customers never use" 
                        title="Project Dashboard, the summary view for a project that most customers never use">
                        </a>
                    </div>

                    <p class="c-imagebox__caption">
                        Project Dashboard, the summary view for a project that most customers never use<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-project-dashboard">View Larger Image</a></span></p>
                        
                    <!-- end --> 

                    <h5>What were customers saying?</h5>
                    <p>Nearly every customer using Rollbar heavily day-to-day was saying “Please create a cross-project dashboard!” But nearly every customer had a very different idea of what that meant—of course, everyone ideally wanted a solution to their own specific use case.</p>
                    <h5>What was our hypothesis?</h5>
                    <p>If we provide users the ability to compare even just a few key data points across their projects, we will make their lives so much easier.</p>


                    <h4 id="approach">Approach</h4>
                    <p><em>Research, analysis, exploration.</em></p>
                    <h5>Piloting user-centered design in an engineering-driven environment.</h5>
                    <p>Myself, the product manager, and the two founders all agreed we wanted to create a prototype of what had initially been dubbed the ‘Cross-project Dashboard’ and put it in front of a core group of customers. This was the first time Rollbar had started a project with design-driven research, and I was presenting this as an ideal project for us to pilot a new process. My goal was to show the team how we’d benefit from talking to users right at the start, and that building a simple prototype would provide us a way to test our ideas out in a much less expensive way than specifying a more complex product expansion up front and making adjustments once it was released widely to our customers.</p>
                    <h5>Simple UX project plan</h5>
                    <p>I think a key to a successful design project is how you plan it: too much planning and it becomes overloaded with process; too little planning it can quickly become chaotic and fall apart. The design team—myself and another product designer—mapped out a plan to get us from the first meeting where we got approval to proceed all the way through to flipping the switch in production to put the new dashboard in front of customers. I won’t get into all the details of the plan here—we simply talked about all the various tools, activities, and checkpoints we felt were essential and sketched out a rough schedule to share with product and engineering.</p>

                
                    <h5>Customer interviews &amp; contextual inquiries</h5>
                    <p>[Intro TK]</p>
                    
                    <h5>Discovery exercises</h5>
                    <p>["Blank Slate" description/example TK]</p>
                    <p>["Conversations" description/example TK]</p>

                    <h5>Affinity mapping</h5>
                    <p>No portfolio is complete without the obiligatory photo of a wall of Post-Its&trade;. Seriously though, this exercise is a very effective way to gain insights from a large sampling of customer input and research. </p>
                    <p>We very quickly saw three groupings emerge:
                        <ul>
                            <li>Metrics/Visualizations/Reporting</li>
                            <li>Alerting/Triage</li>
                            <li>Filtering/Customization</li>
                        </ul>
                    </p>
                    <p>We used these use cases to guide our initial interaction model explorations.</p>

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-research_affinity-mapping_master">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-research_affinity-mapping_master_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-research_affinity-mapping_master_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-research_affinity-mapping_master_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-research_affinity-mapping_master_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-research_affinity-mapping_master_medium.jpg" 
                        alt="<?php echo $rbad; ?> - customer feedback ready for affinity mapping exercise" 
                        title="<?php echo $rbad; ?> - customer feedback ready for affinity mapping exercise">
                        </a>
                    </div>
                    <!-- end --> 

                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - customer feedback ready for affinity mapping exercise<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-research_affinity-mapping_master">View Larger Image</a></span></p>

                    <h5>Research Highlights</h5>
                    <p>Key takeaways from the affinity exercise and user research:</p>
                    <ul>
                        <li>Most users have multiple services within their product.</li>
                        <li>They have created a 1:1 mapping between their services and Rollbar projects because that’s the model that works best for them based on interaction model of our key view, the Items View.</li>
                        <li>Users want a broader context that goes beyond a single Rollbar project.</li>
                        <li>Two important themes emerged:
                            <ol>
                                <li>Reporting: Users want a high-level overview of the state of their entire product in one place.</li>
                                <li>Triage: Users want real time updates from multiple projects so that they can identify issues from a single place and ‘jump to them’.</li>
                            </ol>
                        </li>
                        <li>A "design win" will be a solution that not only provides a high-level overview of the entire application but encourages investigation and troubleshooting even at this “50,000ft” view.</li>
                    </ul>

                    <!-- Put this in a panel, or design a card for info like this -->
                    <h5>Problem Statement</h5>
                    <p>With everything we learned from talking to customers and analyzing research, we arrived at a very clear problem to be solved.</p>
                    <div class="c-panel c-panel--inform c-panel__sharp"><p>Rollbar users don’t have adequate visibility into the state of all projects and services across their account and this makes assessing the overall health of their product very cumbersome and difficult.</p></div>

                    <p><a class="link--to-top" href="#">TOP</a></p>

                    <h4 id="ideas">Ideas &amp; Experiments</h4>
                    <p>[Design concepts intro TK]</p>
                    
                    
                    <!-- imagegrid  --> 
                    <!--
                    <div class='c-imagegrid'>
                        <div class="c-imagegrid--item c-imagebox">
                            <a href="#" 
                            data-reveal-id="ALD-ideation_early-UI-sketch">
                            <img srcset="
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_small.jpg 400w,
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg 800w,
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_large.jpg 1200w
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_xlarge.jpg 1600w" 
                            sizes="(min-width: 48em) 66.6vw, 100vw" 
                            src="/images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg" 
                            alt="<?php echo $rbad; ?> - early ideation sketch" 
                            title="<?php echo $rbad; ?> - early ideation sketch">
                            </a>
                        </div>
                        <div class="c-imagegrid--item c-imagebox">
                            <a href="#" 
                            data-reveal-id="ALD-ideation_lofi-wireframe">
                            <img srcset="
                            /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_small.jpg 400w,
                            /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_medium.jpg 800w,
                            /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_large.jpg 1200w
                            /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_xlarge.jpg 1600w" 
                            sizes="(min-width: 48em) 66.6vw, 100vw" 
                            src="/images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_medium.jpg" 
                            alt="<?php echo $rbad; ?> - early ideation low fidelity wireframe" 
                            title="<?php echo $rbad; ?> - early ideation low fidelity wireframe">
                            </a>
                        </div>
                        <div class="c-imagegrid--item c-imagebox">
                            <a href="#" 
                            data-reveal-id="ALD-ideation_early-UI-sketch">
                            <img srcset="
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_small.jpg 400w,
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg 800w,
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_large.jpg 1200w
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_xlarge.jpg 1600w" 
                            sizes="(min-width: 48em) 66.6vw, 100vw" 
                            src="/images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg" 
                            alt="<?php echo $rbad; ?> - early ideation sketch" 
                            title="<?php echo $rbad; ?> - early ideation sketch">
                            </a>
                        </div>
                        <div class="c-imagegrid--item c-imagebox">
                            <a href="#" 
                            data-reveal-id="ALD-ideation_early-UI-sketch">
                            <img srcset="
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_small.jpg 400w,
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg 800w,
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_large.jpg 1200w
                            /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_xlarge.jpg 1600w" 
                            sizes="(min-width: 48em) 66.6vw, 100vw" 
                            src="/images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg" 
                            alt="<?php echo $rbad; ?> - early ideation sketch" 
                            title="<?php echo $rbad; ?> - early ideation sketch">
                            </a>
                        </div>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - early ideation<span class="hide-for-small"> / Click image to view larger</span></p> -->
                    <!-- end imagegrid --> 



                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-ideation_early-UI-sketch">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-ideation_early-UI-sketch_medium.jpg" 
                        alt="<?php echo $rbad; ?> - early ideation sketch" 
                        title="<?php echo $rbad; ?> - early ideation sketch">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - early ideation sketch<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-ideation_early-UI-sketch">View Larger Image</a></span></p>
                    <!-- end --> 

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-ideation_lofi-wireframe">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-ideation_lofi-wireframe_medium.jpg" 
                        alt="<?php echo $rbad; ?> - early ideation low fidelity wireframe" 
                        title="<?php echo $rbad; ?> - early ideation low fidelity wireframe">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - early ideation low fidelity wireframe<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-ideation_lofi-wireframe">View Larger Image</a></span></p>
                    <!-- end -->

                    <p><a class="link--to-top" href="#">TOP</a></p>

                    <h4>Prototyping &amp; User Testing</h4>
                    <h5>Proof-of-concept reviews with customers</h5>
                    <p>
                    We presented wireframes to customers we had previously interviewed to gather feedback. We also used these sessions to seek a commitment to extended testing once we released the initial beta version to a select group of customers. 
                    </p>
                    

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-ixd_wireframe-v01">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-ixd_wireframe-v01_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-ixd_wireframe-v01_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-ixd_wireframe-v01_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-ixd_wireframe-v01_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-ixd_wireframe-v01_medium.jpg" 
                        alt="<?php echo $rbad; ?> - wireframe of finalized MVP design" 
                        title="<?php echo $rbad; ?> - wireframe of finalized MVP design">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - wireframe of finalized MVP design<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-ixd_wireframe-v01">View Larger Image</a></span></p>
                    <!-- end --> 

                    <p>We also started exploring how to expose the Account-level view in the global navigation. </p>
                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-ixd_appnav_wireframe-v01">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-ixd_appnav_wireframe-v01_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-ixd_appnav_wireframe-v01_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-ixd_appnav_wireframe-v01_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-ixd_appnav_wireframe-v01_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-ixd_appnav_wireframe-v01_medium.jpg" 
                        alt="<?php echo $rbad; ?> - wireframe with beta dashboard nav" 
                        title="<?php echo $rbad; ?> - wireframe with beta dashboard nav">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - wireframe with beta dashboard nav<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-ixd_appnav_wireframe-v01">View Larger Image</a></span></p>
                    <!-- end --> 

                    <p><a class="link--to-top" href="#">TOP</a></p>

                    <h4 id="insights">Unexpected Insights</h4>
                    <p>Customers did not want to see data for an interval longer than a week.</p>

                    <h4>Refining the Design</h4>
                    <p>[Intro TK]</p>
                    <h5>Filtering controls</h5>
                    <p>Exploring two variations of the combobox component</p>

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-UI_select-combobox-v01">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-UI_select-combobox-v01_medium.jpg" 
                        alt="<?php echo $rbad; ?> - select combobox concept 1" 
                        title="<?php echo $rbad; ?> - select combobox concept 1">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - select combobox concept 1<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-UI_select-combobox-v01">View Larger Image</a></span></p>
                    <!-- end --> 

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-UI_select-combobox-v01-alt">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01-alt_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01-alt_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01-alt_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-v01-alt_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-UI_select-combobox-v01-alt_medium.jpg" 
                        alt="<?php echo $rbad; ?> - select combobox concept 2" 
                        title="<?php echo $rbad; ?> - select combobox concept 2">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - select combobox concept 2<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-UI_select-combobox-v01-alt">View Larger Image</a></span></p>
                    <!-- end --> 

                    <h5>Evolving the Global Design System</h5>
                    <p>Refining and documenting net-new components for use in global design system</p>

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-UI_select-combobox-filter-component-spec">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-filter-component-spec_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-filter-component-spec_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-filter-component-spec_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-UI_select-combobox-filter-component-spec_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-UI_select-combobox-filter-component-spec_medium.jpg" 
                        alt="<?php echo $rbad; ?> - combobox filter component documentation for front-end team and design system sprint" 
                        title="<?php echo $rbad; ?> - combobox filter component documentation for front-end team and design system sprint">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - combobox filter component documentation for front-end team and design system sprint<span class="hide-for-small"> / <a href="#" data-reveal-id="AALD-UI_select-combobox-filter-component-spec">View Larger Image</a></span></p>
                    <!-- end --> 

                    <h5>Comitting to a New Entry-point</h5>
                    <p>Improving our global empty-state patterns for new users and onboarding</p>

                    <!-- start -->
                    <div class="c-imagebox">
                        <a href="#" 
                        data-reveal-id="ALD-usecase_empty-state-v01">
                        <img srcset="
                        /images/rollbar-account-dashboard/ALD-usecase_empty-state-v01_small.jpg 400w,
                        /images/rollbar-account-dashboard/ALD-usecase_empty-state-v01_medium.jpg 800w,
                        /images/rollbar-account-dashboard/ALD-usecase_empty-state-v01_large.jpg 1200w
                        /images/rollbar-account-dashboard/ALD-usecase_empty-state-v01_xlarge.jpg 1600w" 
                        sizes="(min-width: 48em) 66.6vw, 100vw" 
                        src="/images/rollbar-account-dashboard/ALD-usecase_empty-state-v01_medium.jpg" 
                        alt="<?php echo $rbad; ?> - empty state for users with no active projects" 
                        title="<?php echo $rbad; ?> - empty state for users with no active projects">
                        </a>
                    </div>
                    <p class="c-imagebox__caption">
                        <?php echo $rbad; ?> - empty state for users with no active projects<span class="hide-for-small"> / <a href="#" data-reveal-id="ALD-usecase_empty-state-v01">View Larger Image</a></span></p>
                    <!-- end --> 

                    <p><a class="link--to-top" href="#">TOP</a></p>
                    
                    <h4 id="learning">What We Learned</h4>
                    <p>As we evolved the MVP through performing user testing and analyzing user data we came to realize that the reporting and triage use cases were both served very well by the functionality and experience we had converged on for our beta release. This changed the direction of our intended design evolution: rather than providing customizations for each use case that could be optionally enabled on top of the base experience, we committed to adding functionality that would improve the core experience. </p>

                    <p><a class="link--to-top" href="#">TOP</a></p>

                    <h4 id="solution">Solution</h4>
                    <p><em>The first release of the Account Dashboard helped Rollbar customers achieve their previously unmet goals immediately. By providing insight into individual trends alongside potential correlated patterns, engineering teams could now quickly see how performance of various applications and services affects the health of their overall product. When a team can more efficiently triage and solve errors in complex systems they are more effective at maintaining high quality experience for their users.</em></p>
                    
                    <h5>Basic Critical Error Triage Demo</h5>
                    <p>This video walkthrough presents a simplified task flow for triaging a high impact issue from the account level. The starting point is a wide view across projects, occurences, and error levels; the user can zero-in on a specific project and environment to isolate a critical error much more quickly than if using multiple Item Views. This is a very simpified example, in a real-world scenario we would see dozens of projects with a higher likelihood of variance in occurences across error levels.</p>

                    <!-- start vimeo embed --> 
                    <div style="padding:59.31% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/370113864?byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    <!-- end vimeo embed --> 

                    <p><a class="link--to-top" href="#">TOP</a></p>

                    <h4 id="upshot">Upshot</h4>
                    <p>The project was a win for Rollbar on a number of important levels.</p>
                    <p>Top customers immediately started telling us even this basic MVP was massively useful to them (qualitative win); customer commitment to product strengthened and attrition numbers quickly decreased, especially among enterprise customers (quantitative win).</p>
                    <p>Isolating specific task flows and simplifying them provided much higher value metrics internally on user behavior across reporting and triage features.</p>
                    <p>New design processes tested in real-world; design team empowered to explore concepts and experiment with features; product and engineering now able to collaborate more seamlessly with design than before.
                    </p>

                    

                    <p><a class="link--to-top" href="#">TOP</a></p>
                    
                    <div class="c-link-pagination">
                                <!-- <a class="c-link-pagination" href="#overview" onclick="$('.tabs a[href=\'#overview\']').click()">Read Project Overview</a> -->
                                <a class="c-link-pagination--prev" href="#overview">Read Project Overview</a>
                    </div>

                </div>
            </li>
        </ul>
    </div>
