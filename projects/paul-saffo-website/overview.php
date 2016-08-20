<div class="overview">
    <!-- overview-main -->
    <div class="overview-main">
        <!-- <a name="top"> -->
        <ul class="tabs" data-tab>
            <li class="tab-title active">
                <a href="#overview">
                    <?php echo $overview_tab ?>
                </a>
            </li>
            <li class="tab-title">
                <a href="#process">
                    <?php echo $process_tab ?>
                </a>
            </li>
        </ul>
        <ul class="tabs-content">
            <li class="content active" id="overviewTab">
                <!-- overview-sidebar -->
                <div class="overview-sidebar">
                    <div class="panel radius">
                        <h5> <?php echo $overview_sidebar_heading; ?></h5>
                        <ul class="services">
                            <li>Identity System</li>
                            <ul>
                                <li>Logo Design</li>
                                <li>Icon Design</li>
                            </ul>
                            <li>Visual + Interface Design</li>
                            <ul>
                                <li>Art Direction</li>
                                <li>Mobile-first layouts</li>
                                <li>Typography</li>
                            </ul>
                            <li>HTML Prototyping</li>
                            <li>Front-end Development</li>
                            <ul>
                                <li>Custom WordPress Theme</li>
                                <li>Mobile menu animations</li>
                                <li>SVG with PNG fallbacks</li>
                                <li>Custom webfonts loader</li>
                                <li>Modular styles using ITCSS</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="overview-content">
                    <p>Paul Saffo is a forecaster and futurist. He explores the dynamics of large-scale, long-term change; he teaches forecasting at Stanford University, chairs the Future Studies and Forecasting track at Singularity University, and serves on the Board of the Long Now Foundation.</p>
                    <p>Paul has a rich collection of content—journal entries, essays, and interviews—and a well-known brand in Silicon Valley and internationally.</p>
                    <h4><?php echo $overview_section_a; ?></h4>
                    <p>Paul needed an updated brand identity and a complete refresh of his existing website. </p>
                    <p>For the redesign, the primary objective was to create a visual design that expressed the rational, intellectual clarity of Paul’s writing, as well as the inventive, human qualities of Paul himself.</p>
                    <p>In addition to the identity and visual design, my goal was to provide a straightforward user experience that worked well on all screens—from a tiny Android 2.3 browser to a high-resolution desktop screen.</p>
                    <h4><?php echo $overview_section_b; ?></h4>
                    <p>Working from Paul’s previous website I refined it’s more complex user interface down to it’s essentials, enhancing usability and setting the stage for a more focused and prominent identity. </p>
                    <p>One of the biggest improvements over the previous design is a much more simplified landing page; now, instead of quotations and an unclear path to the main content, the first screen users see shows the most recent journal entry and a featured essay from his archives.</p>
                    <p>I brought to the foreground graphical elements such as the unique navigation icons that had become a key part of his overall identity, and redrew them for hi-res displays. </p>
                    <p>Along with this I redesigned his logo, simplifying the typography and selecting a color with more presence—a rich deep red that communicates urgency without being too forceful.</p>
                    <p>My design strategy for the interface design was to frame the entire site in the updated identity, which is anchored by the new logo, but supported by the icons and updated color scheme. Then, for each section, I frame the content with a large header image that signals what is in that section. Some of these are very literal; others are ‘stories’ that become more clear once you acquire knowledge of Paul’s content.</p>
                    <p>Typography and color are core design elements of the new design. I selected two typefaces, one for headers and one for the body text. I chose Aller for the headings for it’s unique and inventive visual rhythm; I chose Acumin Pro for the body text for its high legibility and impression of rationality and clarity. The color palette is built around the logo color. The background (on desktop) is a cool dark gray, which optically recedes behind the main content area; the sidebar is a warm light gray, with a slight green hue to provide subtle contrast to the red of the logo and the icons.</p>
                    <p>I built the website as a completely custom theme for WordPress, using a blank Sage starter theme; by not using even a small portion of a UI framework such as Bootstrap, or any prebuilt templates, I was able to keep the code very lean, and keep the ’page weight’ down for slower networks (and it’s been so much easier to maintain!) </p>
                    <h4><?php echo $overview_section_c; ?></h4>
                    <p>I created a website that presents a strong update to Paul’s identity, and frames his content with a graphical richness and elements of storytelling. It delivers a very pleasing and approachable user experience that’s highly performant and accessible across a wide array of devices.</p>
                    <p>Paul is extremely happy with the results.</p>
                    <p>Visit the site: <a href="http://www.saffo.com/" name="" target="_blank">www.saffo.com</a></p>
                    <p><a class="to-top" href="#">TOP</a></p>
                    
                    <div class="bottom-tab-nav-next">
                        <a href="#process">See Process &amp; Artifacts</a>
                    </div>

                </div>
            </li>
            <li class="content" id="processTab">
                <div class="overview-content">
                    <p>For this project my process was different from my <a href="/projects/solanolabs-ci-session-view/#process">standard product design process</a> in that I functioned as an ‘agency of one’ and my client was an individual, not a group of stakeholders with varied involvement. But the basic sequence is very similar, rooted in a thorough Discovery process.</p>
                    <p>As each project phase continues to the next it informs the overall process, i.e. Discovery is a large portion of a project done at the beginning, but discovery continues through planning, design, etc. This is essentially an ‘iterative waterfall’ process because it progresses very linearly, yet still allows for a productive feedback loop throughout the project.</p>
                    <p><strong><a href="#discover">Discover</a> &gt; <a href="#planning">Planning</a> &gt; <a href="#concepts">Concepts</a> &gt; <a href="#design">Design</a> &gt; <a href="#build">Build</a></strong></p>
                    <h4 id="discover">Discover</h4>
                    <p>The discovery process was light on deliverables such as a creative brief; Paul had a general idea of what he wanted to change about his website and identity, and I guided us through requirements gathering and conceptual exploration in structured but informal way.</p>
                    <h5>Research</h5>
                    <p>The original website was not tooled for analytics, so without this data we could not analyze user behaviors that might reveal user flow issues. What I did do, however, is show the existing site to a small group of people and ask them to give me feedback on the old design and overall usability. This was simple to do and gave me a good basis for making fundamental changes to the navigation and content presentation.</p>
                    <p>The consensus supporting my observations:</p>
                    <ol>
                        <li>The landing page with a multi-panel narrative revealed only by hovering small elements was not discoverable or impactful.</li>
                        <li>Users wanted to quickly look at recent journal entry, or get to his essays and interviews; the journal index link/view was more confusing than helpful.</li>
                        <li>The colors were washed out, the graphics were blurry, and the type was too small (we we’re acutely aware of this already).</li>
                    </ol>
                    <h5>Requirements &amp; Creative Notes</h5>
                    <p><strong>Branding</strong></p>
                    <ul>
                        <li>Simplify logo geometry and apply more emphatic color</li>
                        <li>Re-create icons for larger sizing and hi-DPI displays</li>
                        <li>Develop way to communicate intellect, rationality, inventiveness</li>
                    </ul>
                    <p><strong>Experience</strong></p>
                    <ul>
                        <li>Reading experience and navigation must be optimized for mobile</li>
                        <li>Reduce complexity of content presentation - focus on Journal and Essays primarily, minimal quotations, etc.</li>
                        <li>Storytelling - maps and diagrams as metaphor for forecasting</li>
                    </ul>
                    <p><strong>Technical</strong></p>
                    <ul>
                        <li>Fast on mobile - needs responsive images and async font loader, etc.</li>
                        <li>Support for older mobile browsers - SVG fallbacks, Modernizr, etc.</li>
                        <li>Set up Google Analytics! (And add views/filters for staging).</li>
                    </ul>
                    <p>
                        </br>With these notes and various thumbnail design ideas, I could begin Concept phase. First I needed to organize all the input gathered so far, and create a plan.</p>
                    <p><a class="to-top" href="#">TOP</a></p>
                    <h4 id="planning">Planning</h4>
                    <p>Since we had collaborated previously on website design for another venture, he knew I had a solid process and we could keep things lean; he didn’t need a ton of documentation of our decisions, just iterative progress towards the final product.</p>
                    <p>But even when I’m working on a complete project as a team of one, I still like to map out how I’m going to get from A to B. It looks something like this:</p>
                    <table>
                        <colgroup>
                            <col style="text-align:left;" />
                            <col style="text-align:left;" />
                            <col style="text-align:left;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th style="text-align:left;">A. Logo</th>
                                <th style="text-align:left;">B. Icons</th>
                                <th style="text-align:left;">C. Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:left;">0 - Sketches (not presented)</td>
                                <td style="text-align:left;">0 - Sketches (not presented)</td>
                                <td style="text-align:left;">0 - Thumbnails (not presented)</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">1 - Rough B&amp;W Designs</td>
                                <td style="text-align:left;">1 - Rough B&amp;W Designs</td>
                                <td style="text-align:left;">1 - Mobile Sketches</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">2 - ‘Final’ B&amp;W with Type</td>
                                <td style="text-align:left;"></td>
                                <td style="text-align:left;">2 - Desktop Sketches</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">3 - Final Color version (present for approval)</td>
                                <td style="text-align:left;">3 - Final Vectors (present for approval)</td>
                                <td style="text-align:left;">3 - Color and Type explorations (not presented)</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">4 - Generate SVG (to web assets)</td>
                                <td style="text-align:left;">4 - Generate SVGs (to web assets)</td>
                                <td style="text-align:left;">4 - Mockups (present for approval)</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;">5 - All formats for delivery at end of project</td>
                                <td style="text-align:left;"></td>
                                <td style="text-align:left;">5 - Build page templates</td>
                            </tr>
                            <tr>
                                <td style="text-align:left;"></td>
                                <td style="text-align:left;"></td>
                                <td style="text-align:left;">6 - Write stylesheets</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>As I worked through each piece in sequence, I present the work on a private client website. I like to keep the presentations available in one place throughout the entire project so we can easily refer back to decisions and their rationales.</p>
                    <p><a class="to-top" href="#">TOP</a></p>
                    <h4 id="concepts">Concepts</h4>
                    <p>At this stage I’ve internalized the goals and objectives, both conceptual and technical, and mapped out a structured plan. Now I’m free to diverge out into different methods of creative exploration. This process involves lots of ‘visual gathering’ and recombining elements from designs other mediums, snapshots capturing the look and feel of products or publications I think match the patterns outlined in my conceptual notes. I also look at other content-heavy mobile sites to see which interactions and flows work (and which don’t).</p>
                    <p>It’s during this process that I start to converge on type and color choices. I’ll narrow the field down in the design phase.</p>
                    <h5>Sketches</h5>
                    <p>I sketch lots of rough ideas. For this project I went quickly to mobile layouts in pencil, working out various ways to present content and devise navigation. Pencil on paper is, for me, the most effective way of thinking through design ideas; I can sketch quickly and allow myself to make ‘mistakes’, and I don’t get too attached to refining a design pattern like I might in Sketch or Illustrator.</p>
                    <!-- saffo-website-sketches-1 -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-website-sketches-1">
                            <img srcset="/images/saffo-website-sketches-1_small.jpg 400w,
                        /images/saffo-website-sketches-1_medium.jpg 800w,
                        /images/saffo-website-sketches-1_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-website-sketches-1_medium.jpg" alt="Paul Saffo Identity - Final Icon Designs">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Early sketches of mobile layouts</strong> - I didn't use most of these ideas, but by thinking them through on paper I was able to make better design choices in the next rounds.<span class="hide-for-small">/ <a href="#" data-reveal-id="saffo-website-sketches-1">View Larger Image</a></span></p>
                    <!-- saffo-website-sketches-2 -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-website-sketches-2">
                            <img srcset="/images/saffo-website-sketches-2_small.jpg 400w,
                        /images/saffo-website-sketches-2_medium.jpg 800w,
                        /images/saffo-website-sketches-2_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-website-sketches-2_medium.jpg" alt="Paul Saffo Identity - Final Icon Designs">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Desktop landing page sketches</strong> - Evolution towards the final desktop layout. Through these sketches I also revealed the idea for the final mobile layouts. <span class="hide-for-small">/ <a href="#" data-reveal-id="saffo-website-sketches-2">View Larger Image</a></span></p>
                    <!-- saffo-website-sketches-3 -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-website-sketches-3">
                            <img srcset="/images/saffo-website-sketches-3_small.jpg 400w,
                        /images/saffo-website-sketches-3_medium.jpg 800w,
                        /images/saffo-website-sketches-3_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-website-sketches-3_medium.jpg" alt="Paul Saffo Identity - Final Icon Designs">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Later sketches of mobile layouts</strong> - Tightening up the layouts, with notes on things to leave out in the mockups. <span class="hide-for-small">/ <a href="#" data-reveal-id="saffo-website-sketches-3">View Larger Image</a></span></p>
                    <p>One thing I’ve learned as a designer is the importance of setting aside these sketches for a few days and reviewing them with fresh eyes later. Sometimes what seemed like the best idea seems incomplete or too busy and can be improved (or completely rejected in favor of a new idea). This is the time to figure this out, not once I’ve done hi-fidelity mockups or a prototype (although prototypes often lead to substantial revision, too).</p>
                    <p>While the sketches are out of sight and mind, I looked my type and color ideas and gathered all my image resources to prepare for assembling complete designs.</p>
                    <p>At this stage of the project I typically present the work done so far to get feedback from my client. For this project, Paul requested that I develop and present a single recommended design. (Yikes! What if he hated it?). This method means fewer presentations, but we also run the risk of skipping important artifacts. Although I knew I wouldn’t be presenting them for feedback, I created style boards to explore and document the choices leading up to the recommended design. For me it’s an essential part of developing early concepts because they show the proposed visual style, separate from content and structure. It also really helps to print them out and tape them up on the wall so I can stay focused while working on designs.</p>
                    <h5>Style Boards</h5>
                    <!-- saffo-styleboards -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-styleboards">
                            <img srcset="/images/saffo-styleboards_small.jpg 400w,
                        /images/saffo-styleboards_medium.jpg 800w,
                        /images/saffo-styleboards_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-styleboards_medium.jpg" alt="">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Style Board</strong> - TBD <span class="hide-for-small">/ <a href="#" data-reveal-id="saffo-styleboards">View Larger Image</a></span></p>
                    <p><a class="to-top" href="#">TOP</a></p>
                    <h4 id="design">Design</h4>
                    <h5>Why no Wireframes?</h5>
                    <p>Typically at this stage I would construct detailed wireframes that specify the structure of the interface, and, for more complex interfaces, show indications of how interactions might work. (For very complex interfaces this is an ideal stage to begin anticipating how the actual front-end will be structured, and mapping out data points, etc.). As a team of one I didn’t need to present this level of detail for review, so I took the pencil sketches and began to frame out the base structures directly in Sketch.</p>
                    <h5>Mockups</h5>
                    <p>Mockups are where I start to assemble conceptual choices and begin to merge content, structure and style to create a cohesive design for presentation.</p>
                    <p>I get to dial in type styles for headings and body text, and begin looking at type scale (ratio of sizes from body text up to main headers). I apply colors first to structural elements, and then set up a consistent color pattern for links and other interactions.</p>
                    <!-- saffo-design-sketch-1 -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-design-sketch-1">
                            <img srcset="/images/saffo-design-sketch-1_small.jpg 400w,
                        /images/saffo-design-sketch-1_medium.jpg 800w,
                        /images/saffo-design-sketch-1_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-design-sketch-1_medium.jpg" alt="Paul Saffo Website - Design in Sketch 1">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Mockups</strong> - Designing the desktop and mobile views side-by-side in Sketch. <span class="hide-for-small">/ <a href="#" data-reveal-id="saffo-design-sketch-2">View Larger Image</a></span></p>
                    <!-- saffo-design-sketch-2 -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-design-sketch-2">
                            <img srcset="/images/saffo-design-sketch-2_small.jpg 400w,
                        /images/saffo-design-sketch-2_medium.jpg 800w,
                        /images/saffo-design-sketch-2_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-design-sketch-2_medium.jpg" alt="">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Mockups</strong> - Detail of mobile navigation in Sketch. <span class="hide-for-small">/ <a href="#" data-reveal-id="saffo-design-sketch-2">View Larger Image</a></span></p>
                    <h5>Presentation</h5>
                    <p>At this stage I have a set of initial mockups that tie everything together: the essential pieces—logo, icons, colors, type, structure—have been assembled into a cohesive design and are ready to present.</p>
                    <h5>Final Design</h5>
                    <p>Paul loved my proposed design, so we needed to add in the final piece of experience: the header images. Since I’d been using a stock image to represent the header image pattern, I started on the selection and art direction of images Paul and I gathered from his collection of maps and other elements of interest.</p>
                    <p>I recommended that I move ahead building out the site, while we also collaborated on the header images. This worked out well because I could quickly swap in different images to live layouts and post screenshots of different ideas for review.</p>
                    <p>I wanted images that reinforce the content of the corresponding section, so I picked those out first. Based on my type and color choices I was looking to create a specific feel through composition and tone. In Photoshop I cropped each selection to bring out a single point of focus, and then created adjustment filters to get the feel right for the overall design.</p>
                    <!-- saffo-art-direction -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-art-direction">
                            <img srcset="/images/saffo-art-direction_small.jpg 400w,
                        /images/saffo-art-direction_medium.jpg 800w,
                        /images/saffo-art-direction_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-art-direction_medium.jpg" alt="">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Final Designs</strong> - Photo art direction for page header images. <span class="hide-for-small">/ <a href="#" data-reveal-id="saffo-art-direction">View Larger Image</a></span></p>
                    <p><a class="to-top" href="#">TOP</a></p>
                    <h4 id="build">Build</h4>
                    <p>One of the things I love about ‘agency of one’ projects like this is that I get to do both design and implementation. I’m just as a comfortable in a code editor as I am in Photoshop.</p>
                    <h5>Platform</h5>
                    <p>I built the new website in <a href="http://wordpress.org" target="_blank">WordPress</a>, and created a custom theme from scratch using the awesome <a href="https://roots.io/sage/" target="_blank">Sage</a> ’starter theme’ built by the team at Roots. I have lots of experience building with WordPress, but in recent years I’ve also worked a lot with Ruby on Rails developers and so I’ve come to rely on things like partials and an asset pipeline. Sage brings a more modern front-end development workflow to WordPress. It doesn’t contain any design or templates, but it does ship with Bootstrap assets built in. So I forked my own version of Sage that strips all this out; I developed my own custom styles and page templates to have complete control over the front-end.</p>
                    <h5>Front-end</h5>
                    <p>I love CSS, and I really love the <a href="http://sass-lang.com/" target="_blank">Sass</a> preprocessor; variables and mixins make my workflow so much more efficient. But one of the challenges of Sass is the discipline require to make sure my styles are easily maintainable, and that my CSS output is not a snarled mess.</p>
                    <p>I use a methodology for my stylesheet architecture called ITCSS (for ‘Inverted Triangle CSS’) developed by <a href="http://csswizardry.com/" taget="_blank">Harry Roberts</a>. It is based on the fact that the specificity of styles descend from least to most specific, and that styles should be structured within this hierarchy in a modular way to allow for greater flexibility. The short pitch for this approach is that it keeps the stylesheets more readable, and allows for changes to be made to areas of the UI without fear of breaking another area.</p>
                    <!-- saffo-styles-typography -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-styles-typography">
                            <img srcset="/images/saffo-styles-typography_small.jpg 400w,
                        /images/saffo-styles-typography_medium.jpg 800w,
                        /images/saffo-styles-typography_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-styles-typography_medium.jpg" alt="">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Front End</strong> - I created a Sass mixin that work with webfonts to ensure optimal display while font resources load. This eliminates the 'flash of invisible text' issue.</p>
                    <h5>Interactions</h5>
                    <p>My goal for interactions is to try and build them in pure CSS if possible; not using JavaScript for a menu dropdown means there’s just a little less code to send to the browser. But in some cases using JavaScript helps me avoid a more time-consuming process of create CSS-only interactions the work in older browsers (which is often just not going to happen).</p>
                    <p>The mobile menu toggle is an example of a UI animation that is CSS-only; the mobile menu itself is enabled using base jQuery to toggle visibility.</p>
                    <!-- saffo-menu-ixd-demo -->
                    <div class="imagebox">
                        <a href="#" data-reveal-id="saffo-menu-ixd-demo">
                            <img srcset="/images/saffo-menu-ixd-demo_small.jpg 400w,
                        /images/saffo-menu-ixd-demo_medium.jpg 800w,
                        /images/saffo-menu-ixd-demo_large.jpg 1200w" sizes="(min-width: 48em) 66.6vw, 100vw" src="/images/saffo-menu-ixd-demo_medium.jpg" alt="Paul Saffo Website - Design in Sketch 2">
                        </a>
                    </div>
                    <p class="case-caption"><strong>Interaction Design</strong> - Detail of mobile menu animation created with pure CSS. I added 'show' and 'hide ' text to the increase usability.</p>
                    <h5>Development Tools</h5>
                    <p>Because I really like this aspect of any project, here are some notes on my workflow setup:</p>
                    <ul>
                        <li>I run WordPress locally in a Docker container within a Vagrant box using the aptly named <a href="https://wckr.github.io/" target="_blank">Wocker</a>.</li>
                        <li>I write Sass and build the PHP templates in Sublime Text 2.</li>
                        <li>I handle asset, script, and stylesheet processing with the build tool Gulp, with the indispensable <a href="https://www.browsersync.io/" target="_blank">BrowserSync</a> to display updates across different device screens.</li>
                        <li>I push often to a staging server using rsync, and I commit constantly to a git repo to keep work safe and versioned.</li>
                    </ul>
                    <h5>Testing</h5>
                    <p>I develop in the latest build of Chrome Canary, so what I see as I’m constructing the site will rarely have layout issues if I build it correctly. Well, it will have issues, but the Developer Tools are my friend, and I fix them! </p>
                    <p>During the entire build, and again before releasing the final site to production on MediaTemple, I tested the site on real devices to make sure I was providing a consistent experience to as many people as possible.</p>
                    <p>I had decided support for Android 2.3 stock browsers was essential, but I rejected the notion of supporting Internet Explorer 8 and below. Hard to believe the day is finally here, but there are fewer active IE8 users than Android 2.3 users!</p>
                    <p>The main issues I tested for were layout issues, and making sure the PNG fallbacks for the SVG graphics were loading on the devices the can’t handle SVGs.</p>
                    <p><a class="to-top" href="#">TOP</a></p>
                    <!-- icon-design -->
                    <?php include('icons-design.php') ?>
                    <div class="bottom-tab-nav-prev">
                                <a href="#overview">Read Project Overview</a>
                    </div>
            </li>
        </ul>
        </div>
    </div>