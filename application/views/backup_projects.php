<div class="projects">
    <?php foreach ($projects as $project) : ?>
        <div><?php echo $project['name'] ?></div>
        <div><?php echo $project['description'] ?></div>
    <?php endforeach ?>
</div>


<body data-spy="scroll" data-target=".sidenav">
<div id="msbnav" class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="http://web.eecs.umich.edu/~mozafari/">Barzan Mozafari</a><span class="brand"
                                                                                                  style="padding-left: 0px; padding-right: 0px;">&nbsp;·&nbsp;</span><a
                class="brand" href="http://umich.edu/">University Of Michigan</a><span class="brand"
                                                                                       style="padding-left: 0px; padding-right: 0px;">&nbsp;·&nbsp;</span><a
                class="brand" href="http://www.eecs.umich.edu/db/">Database Systems</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="span9">
            <h1>Current Projects</h1>
            <ul>
                <li><a href="http://web.eecs.umich.edu/~mozafari/projects.html#dbseer"><b>DBSeer:</b> Performance
                        Prediction for a Scalable Database-as-a-Service</a></li>
                <br>
                <li><a href="http://web.eecs.umich.edu/~mozafari/projects.html#crowdsourcing"><b>Crowdsourcing Big
                            Data</b></a></li>
                <br>
                <li><a href="http://web.eecs.umich.edu/~mozafari/projects.html#blinkdb"><b>BlinkDB:</b> Querying
                        Petabytes of Data in a "Blink" Time!</a></li>
                <br>
            </ul>
            <h1>Past Projects</h1>
            <ul>
                <li><a href="http://web.eecs.umich.edu/~mozafari/projects.html#cep"><b>High-Performance Complex Event
                            Processing</b></a></li>
                <br>
                <li><a href="http://web.eecs.umich.edu/~mozafari/projects.html#smm"><b>SMM:</b> A System for Mining Data
                        Streams</a></li>
                <br>
                <li><a href="http://web.eecs.umich.edu/~mozafari/projects.html#blogocenter"><b>User Modeling in Social
                            Media</b></a></li>
                <br>
            </ul>

            <h2>
                <p style="line-height: 200%;">
                    <a name="dbseer"> <b><font size="6" face="Arial"></font></b></a><b><font size="6" face="Arial"><a
                                href="http://dbseer.org/">DBSeer</a></font></b>
                </p>
            </h2>
            <br>

            <p><b><font size="2" face="Arial">People:</font></b>
                Barzan Mozafari, Carlo Curino, and Samuel Madden.
            </p>

            <p>
                Cloud computing is characterized by a shared infrastructure and a decoupling between its operators and
                tenants. These two characteristics impose new challenges to databases applications hosted in the cloud,
                namely: (i) how to price database services, (ii) how to isolate database tenants, and (iii) how to
                optimize database performance on this shared infrastructure. Today's solutions, based on
                virtual-machines, do not properly address these challenges. These three challenges share a common need
                for accurate predictive models of performance and resource utilization. <b>DBSeer</b> is a research
                prototype of the predictive models that we have developed for the important class of OLTP/Web workloads.
            </p>

            <p>
                <font color="red"><b>News: Our paper got in CIDR 2013!</b></font>
                <br>
                <a href="http://web.eecs.umich.edu/~mozafari/www.cidrdb.org/cidr2013/">CIDR</a> is based on a
                revolutionary vision which is quite different than the mainstream database conferences. This is what
                their website says:
                <br>
                <br><i>
                    The biennial Conference on Innovative Data Systems Research (CIDR) is a systems-oriented conference,
                    complementary in its mission to the mainstream database conferences like SIGMOD and VLDB,
                    emphasizing the systems architecture perspective. CIDR gathers researchers and practitioners from
                    both academia and industry to discuss the latest innovative and visionary ideas in the field.</i>
                <br><br>
                DBSeer is now accepted in CIDR's Outrageous Ideas and Vision Track. I am looking forward to presenting
                our DBSeer in January 2013!
            </p>

            <p>
                <font color="red"><b>News: DBSeer's monitoring module is now open-source!</b></font>
                <br>
                Download it from <a href="http://dbseer.org/">here</a>. Email me if you run into any issues.

            </p>

            <p>
                <font color="red"><b>News: Teradata has assigned a team of engineers to incorporate DBSeer into their
                        framework!</b></font>
                <br>
                <a href="http://www.teradata.com/">Teradata</a> is a leading provider of enterprise analytic
                technologies and services that include Data Warehousing, Business Intelligence and CRM.
                A few months ago I presented DBSeer at <a
                    href="http://www.dagstuhl.de/en/program/calendar/semhp/?semnr=12282">Dagstuhl's Database Workload
                    Management Workshop</a> which is where I met a member of Teradata's workload management team. Long
                story short, as a result of the meetings that followed (between the Teradata's technical managers and
                I), Teradata has decided to port DBSeer into their framework with the goal of automating their workload
                management mechanisms, which are currently based on manual configuration of a set of rules (called
                throttles). Exciting news is that with the allocation of engineering resources at Teradata to this
                project, the adoption of DBSeer into their framework has now officially started!
                I am already excited and looking forward to this collaboration and to see DBSeer's applications in a
                large commercial database system!
            </p>

            <p>
                <font color="red"><b>News: Our paper got in SIGMOD 2013!</b></font>
                <br>
                The annual <a href="http://www.sigmod.org/2013/">ACM SIGMOD/PODS conference</a> is a leading
                international forum for database researchers, practitioners, developers, and users to explore
                cutting-edge ideas and results, and to exchange techniques, tools, and experiences.

                <br><br>
                The full version of our DBSeer paper is now accepted in SIGMOD 2013, and I am looking forward to
                presenting DBSeer in June 2013! Recently I have been traveling a lot, so I am extra excited that this
                year's SIGMOD is held somewhere close to Boston (it is held in New York)!
            </p>

            <p>
                <font color="red"><b>News: DBSeer in the press!</b></font>
                <br>
                DBSeer has received considerable coverage from the press soon after MIT News Office did a story on
                DBSeer! Read more
                <a href="http://people.csail.mit.edu/barzan/press.html">here</a>.

            </p>

            <p><b><font size="3" face="Arial">Publications:</font></b></p>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;"><b>Barzan Mozafari</b>, Carlo
                    Curino, and Samuel Madden.
                    <a href="http://people.csail.mit.edu/barzan/papers/cidr_2013.pdf">DBSeer: Resource and Performance
                        Prediction for Building a Next Generation Database Cloud
                    </a>. <i>In Proceedings of the Conference on Innovative Data Systems Research </i><a
                        href="http://www.cidrdb.org/cidr2013/index.html">(CIDR)</a>, Asilomar, California, USA, 2013.
                </p></li>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                    <b>Barzan Mozafari</b>, Carlo Curino, Alekh Jindal, and Samuel Madden.
                    <a href="http://people.csail.mit.edu/barzan/papers/sigmod_2013.pdf"> Performance and Resource
                        Modeling in Highly-Concurrent OLTP Workloads</a>.
                    <i>Accepted to Appear In Proceedings of the ACM </i><a href="http://www.sigmod.org/2013/">
                        SIGMOD 2013 Conference</a>, New York, NY, USA, 2013
                </p></li>


            <h2>
                <p style="line-height: 200%;">
                    <a name="crowdsourcing"> <b><font size="6" face="Arial"></font></b></a><b><font size="6"
                                                                                                    face="Arial"><a
                                href="">Crowdsourcing Big Data</a></font></b>
                </p>
            </h2>
            <br>
            <!-- <p><b><font size="2" face="Arial">People:</font></b>
            Barzan Mozafari -->
            <p></p>

            <p>
                Crowdsourcing has become a very popular means of performing tasks that require human intelligence. But
                what do you do when your dataset is too "big"?
                Imagine having to deal with web-scale data: there are hundreds of millions of daily tweets and images.
                Even if labeling each label costs a penny, your company will soon go bankrupt! We have started a new
                project here at MIT that aims to scale crowdsourcing to Big Data.
            </p>

            <p>
                <font color="red"><b>News: We have designed active learning algorithms to integrate machine learning
                        into crowdsourcing workflows!</b></font>
                <br>
                Read <a href="http://istc-bigdata.org/index.php/crowdsourcing-big-data">my post on ISTC's blog</a> about
                how we have
                approached this problem.
            </p>

            <p><b><font size="3" face="Arial">Publications:</font></b></p>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                    <b>Barzan Mozafari</b>, Purnamrita Sarkar, Michael J. Franklin, Michael I. Jordan, and Samuel
                    Madden.
                    <a href="http://arxiv.org/abs/1209.3686">
                        Active Learning for Crowd-Sourced Databases
                    </a>.
                    <i>Technical Report, Nov 2012.</i>
                    <a href="http://web.eecs.umich.edu/~mozafari/datasets/crowdsourcing/">
                        <font color="#ff00ff">Download (some of)
                            the datasets used in the paper
                        </font></a>

                </p></li>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                    <b>Barzan Mozafari</b>, Purnamrita Sarkar, Michael J. Franklin, Michael I. Jordan, and Samuel
                    Madden.
                    <a href="http://web.eecs.umich.edu/~mozafari/papers/vldb_2015_crowd.pdf">
                        Scaling Up Crowd-Sourcing to Very Large Datasets: A Case for Active Learning
                    </a>.
                    In Proceedings of the 41st International Conference on Very Large Data Bases <a
                        href="http://www.vldb.org/2015/">VLDB 2015</a>, September 1-4, 2015<br> <a
                        href="https://github.com/mozafari/active-learning-system"><font color="#04B404"><strong>Download
                                Our Extensible Active Learning System</strong></font></a> <a
                        href="http://web.eecs.umich.edu/~mozafari/datasets/crowdsourcing/"><font
                            color="#04B404"><strong>Download (some of) the datasets used in the paper.</strong>
                        </font>
                    </a>

                </p></li>


            <h2>
                <p style="line-height: 200%;">
                    <a name="blinkdb"> <b><font size="6" face="Arial"></font></b></a><b><font size="6" face="Arial"><a
                                href="http://blinkdb.org/">BlinkDB</a></font></b>
                </p>
            </h2>
            <p><b><font size="2" face="Arial">People:</font></b>
                <a href="http://www.cs.berkeley.edu/~sameerag/" target="_blank">Sameer Agarwal</a>,
                <a href="http://people.csail.mit.edu/barzan/" target="_blank">Barzan Mozafari</a>,
                Aurojit Panda,
                Henry Milner,
                <a href="http://db.lcs.mit.edu/madden/" target="_blank">Samuel Madden</a> and <a
                    href="http://www.cs.berkeley.edu/~istoica" target="_blank">Ion Stoica</a>
            </p>

            <p>
            </p>

            <p>
                Today's web is predominantly data-driven. People increasingly depend on enormous amounts of data
                (spanning terabytes or even petabytes in size) to make intelligent business and personal decisions.
                Often the time it takes to make these decisions is critical. However, unfortunately, quickly analyzing
                large volumes of data poses significant challenges. For instance, scanning 1TB of data may take minutes,
                even when the data is spread across hundreds of machines and read in parallel. BlinkDB is a massively
                parallel, sampling-based approximate query engine for running interactive queries on large volumes of
                data. The key observation in BlinkDB is that one can make perfect decisions in the absence of perfect
                answers. For example, reliably detecting a malfunctioning server in a distributed collection of system
                logs does not require knowing every request the server processed. Based on this insight, BlinkDB allows
                one to tradeoff between query accuracy and response time, enabling interactive queries over massive data
                by running queries on data samples. To achieve this, BlinkDB uses two key ideas that differentiate it
                from previous sampling-based database systems: (1) an optimization framework to build a set of
                multi-dimensional, multi-resolution samples, and (2) a strategy that uses a set of small samples to
                dynamically estimate a query's error and response time at run-time. We have built a BlinkDB prototype,
                and validate its effectiveness using well-known benchmarks and a real-world workload derived from
                Conviva. Our initial set of experiments show that BlinkDB can execute a range of queries over a
                real-world query trace on up to 17 TB of data and 100 nodes in 2 seconds, with an error of 2-10%.
            </p>

            <p>
                <font color="red"><b>News: BlinkDB is now open source!</b></font>
                <br> Download our latest release from <a href="http://blinkdb.org/">http://blinkdb.org</a>
            </p>

            <p>
                <font color="red"><b>News: BlinkDB demo at the first BigData@CSAIL retreat!</b></font>
                <br> I gave a demo of BlinkDB at the 1'st annual bigdata@csail member meeting.
                On November 28, 2012, about 40 managers and researchers from 8 founding member of bigdata@csail attended
                this meeting including -- AIG, EMC, Huawei, Intel, Microsoft, Samsung, SAP and Thomson Reuters -- and
                the MIT CSAIL research community.
                Our demo caused a lot of excitement! The audience loved it when they saw they could query 10TB of data
                in less than 2 seconds:)
            </p>

            <p>
                <font color="red"><b>News: Facebook is deploying BlinkDB!</b></font>
                <br> According to the latest news, Facebook is scheduled to deploy and explore our BlinkDB on one of
                their 80-node clusters in February 2013.
                BlinkDB is built upon and is backward compatible with Hive/Hadoop. Given that Facebook is the main
                contributor to Hive,
                this is a great news for the BlinkDB team:) Go BlinkDB!
            </p>

            <p>
                <font color="red"><b>News: our recent submission to EuroSys 2013 got in!</b></font>
                <br>
                Looking forward to going to Prague and get some feedback on our BlinkDB from the systems community.
            </p>


            <p>
                <font color="red"><b>News: BlinkDB won the Best Paper Award in EuroSys 2013!</b></font>
                <br>
                Congratulations to the BlinkDB team!
            </p>

            <p><b><font size="3" face="Arial">Publications:</font></b></p>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                    Sameer Agarwal, <b>Barzan Mozafari</b>, Aurojit Panda, Henry Milner, Samuel Madden, and Ion Stoica.
                    <a href="http://people.csail.mit.edu/barzan/papers/eurosys_2013.pdf">BlinkDB: Queries with Bounded
                        Errors and Bounded Response Times on Very Large Data</a>.
                    <i> To appear in Proceedings of the European Conference on Computer Systems</i> (<a
                        href="http://eurosys2013.tudos.org/">EuroSys</a>),
                    Prague, Czech Republic, 2013.
                    <a href="http://blinkdb.org/">
                        <font color="#ff00ff">
                            Download BlinkDB's official release
                        </font>
                    </a>
                </p></li>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">Sameer Agarwal, Aurojit Panda, <b>Barzan
                        Mozafari</b>, Anand P. Iyer, Samuel Madden, and Ion Stoica.
                    <a href="http://people.csail.mit.edu/barzan/papers/vldb_2012.pdf">Blink and It's Done: Interactive
                        Queries on Very Large Data</a>.
                    <i>PVLDB, 5(12): 1902-1905, 2012.</i>
                </p></li>


            <br><br>
            <br>

            <h2>
                <p style="line-height: 200%;">
                    <a name="cep"><b><font size="6" face="Arial"></font></b></a><b><font size="6" face="Arial"><a
                                href="http://yellowstone.cs.ucla.edu/projects/index.php/XSeq">High-Performance Complex
                                Event Processing</a></font></b>
                </p>
            </h2>
            <br>

            <p> Complex Event Processing (CEP) is a broad term, referring to any application that involves searching for
                <i>complex patterns</i> among raw events to infer higher-level concepts. Examples include high-frequency
                trading (a certain correlation in stock prices that triggers a purchase), intrusion detection (a series
                of network activities that indicate an attack), inventory management (moving patterns using RFID or GPS
                readings), click stream analysis (a sequence of clicks that trigger an ad), and electronic health
                systems (a combination of sensor readings raising an alert).
                CEP applications have created a fast-growing market, with an annual growth rate of 30% (see <a
                    href="http://www.celent.com/reports/complex-event-processing">Celent report</a>).
                This growing market has led database vendors to add new constructs (called MATCH_RECOGNIZE) to the SQL
                language that allow for expressing sequential patterns among the rows in a table.
            </p>

            <p> Seeking richer abstractions for supporting CEP applications, we have introduced constructs based on
                Kleene-closure expressions and showed that they are significantly more powerful than those proposed by
                database vendors (which are provably incapable of expressing many important CEP queries). We have
                designed the first two database query languages that used <a
                    href="http://www.cis.upenn.edu/~alur/nw.html">nested word automata (NWA)</a> as their underlying
                computational model: <a href="http://people.csail.mit.edu/barzan/papers/vldb_2010.pdf">K*SQL</a> with a
                relational interface, and <a href="http://people.csail.mit.edu/barzan/papers/sigmod_2012.pdf">XSeq</a>
                with an XML interface. <a href="http://www.cis.upenn.edu/~alur/nw.html">NWAs</a> are recent advances in
                the field of automata theory that generalize the notion of regular languages to capture data that has
                both sequential and hierarchical structures. Examples of such data are XML, JSON files, RNA proteins,
                and traces of procedural programs.
            </p>

            <p>
                <a href="http://people.csail.mit.edu/barzan/papers/vldb_2010.pdf">K*SQL</a> solves the long-standing
                problem of providing a unified query engine for both relational and hierarchical data. Similarly,
                despite 15 years of previous research where using tree automata for XML optimization was the status quo,
                <a href="http://people.csail.mit.edu/barzan/papers/sigmod_2012.pdf">XSeq</a> translates XML queries into
                NWAs (which are then optimized using my algorithms) and outperformes the state-of-the-art XML engines by
                several orders of magnitude. XSeq received the <a href="http://www.sigmod.org/2012/awards_sigmod.shtml">SIGMOD's
                    best paper award in 2012</a>.
            </p>


            <p>
                <font color="red"><b>News: Our comments were adopted into the US position for the next edition of
                        SQL!</b></font>
                <br>
                On March 13, 2013 most of my comments
                for the changes to the SQL standard
                (which were based on the papers we published in this area)
                were approved and adopted by the DM32.2 committee!
                The <a href="http://standards.incits.org/a/public/group/dm32.2" target="_blank">DM32.2 Task Group on
                    Database</a> develops standards for the syntax and semantics of database languages. This Task Group
                is the U.S. TAG to ISO/IEC JTC1/SC32/WG3 &amp; WG4 and provides recommendations on U.S. positions to
                INCITS.

                I have been informed that (thanks to Fred Zemke) 3 out of my 4 comments on the recenetly proposed
                changes to SQL have been approved by the DM32.2 committee and will be deployed for the next edition of
                SQL standard. My comments are <b>numbered 34, 35, and 36</b> in the <a
                    href="http://people.csail.mit.edu/barzan/DM32.2-2013-00032R2_Consolidated-CD-2013-USA-comments.pdf"
                    target="_blank">following document</a>. I am now an official contributor to the international
                SQL standards process!

            </p>


            <p><b><font size="3" face="Arial">Publications:</font></b></p>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;"><b>Barzan Mozafari</b>, Kai Zeng,
                    and Carlo Zaniolo.
                    <a href="http://people.csail.mit.edu/barzan/papers/sigmod_2010.pdf">K*SQL: A Unifying Engine for
                        Sequence Patterns and XML</a>.
                    <i>In Proceedings of the ACM </i><a href="http://www.sigmod2010.org/">SIGMOD 2010 Conference</a>,
                    Indianapolis, Indiana, USA, June 6-11,
                    2010. <font color="#ff00ff"><i>
                            <font color="#ff00ff">(SIGMOD 2010's honorable mention demo) </font></i></font>
                </p></li>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;"><b>Barzan Mozafari</b>, Kai Zeng,
                    and Carlo Zaniolo.
                    <a href="http://people.csail.mit.edu/barzan/papers/vldb_2010.pdf">From Regular Expressions to Nested
                        Words: Unifying Languages and Query Execution for Relational and XML Sequences</a>.
                    <i>In Proceedings of the 36th International Conference on Very Large Data Bases</i> <a
                        href="http://www.vldb2010.org/">VLDB 2010</a>,
                    Singapore, September 13-17, 2010.</p></li>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;"><b>Barzan Mozafari</b>, Kai Zeng,
                    and Carlo Zaniolo.
                    <a href="http://people.csail.mit.edu/barzan/papers/sigmod_2012.pdf">High-Performance Complex Event
                        Processing over XML Streams</a>.
                    <i>In Proceedings of the ACM </i><a href="http://www.sigmod.org/2012/">SIGMOD 2012 Conference</a>,
                    Scottsdale, Arizona, USA, 2012.
                    <font color="#ff00ff">(SIGMOD 2012's Best Paper Award)</font>
                    <a href="http://people.csail.mit.edu/barzan/papers/tods_2013.pdf">
                        <font color="#04B404">Read the extended version here.
                        </font></a>
                </p></li>


            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                    Kai Zeng, Mohan Yang, <b>Barzan Mozafari</b>, and Carlo Zaniolo.
                    <a href="http://people.csail.mit.edu/barzan/papers/icde_2013.pdf">Complex Pattern Matching in
                        Complex Structures: the XSeq Approach </a>.
                    <i>In Proceedings of the 29th International Conference on Data Engineering</i> (<a
                        href="http://www.icde2013.org/">ICDE 2013</a>),
                    Brisbane, Australia, April, 2013
                </p></li>

            <li>
                <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                    <b>Barzan Mozafari</b>, Kai Zeng, Loris D'Antoni, and Carlo Zaniolo.
                    <a href="http://people.csail.mit.edu/barzan/papers/tods_2013.pdf">
                        High-Performance Complex Event Processing over Hierarchical Data</a>.
                    <i>To Appear In ACM TODS's Special Issue on "Best of SIGMOD",
                        Dec, 2013.
                    </i></p></li>
            <i>


                <h2>
                    <p style="line-height: 200%;">
                        <a name="smm"><b><font size="6" face="Arial"></font></b></a><b><font size="6" face="Arial"><a
                                    href="http://yellowstone.cs.ucla.edu/projects/index.php/SMM">SMM: Stream Mill
                                    Miner</a></font></b>
                    </p>
                </h2>
                <p>
                    Stream Mill Miner (SMM) is an extensible online data stream mining workbench. SMM is built upon a
                    powerful data stream management system, namely StreamMill. Stream Mill is efficiently supports
                    continuous queries, which are critical in many application areas, including sensors networks,
                    traffic monitoring and intrusion detection. Stream Mill achieves a much broader range of usability
                    and effectiveness in its application domain via minimal but powerful extensions to SQL. SMM utilizes
                    these extensions to build an extensible online mining workbench.
                    The main features of the SMM system are as follows:
                </p>
                <ul>
                    <li><b>Extensibility</b> that allows advanced users/analysts to integrate new mining algorithms, by
                        implementing them declaratively. This feature is supported through Stream Mill UDAs, which are
                        either defined natively in SQL or externally in a programming language such as C/C++. Stream
                        Mill UDAs provide tremendous expressive power to the users, both theoretically and practically.
                        Therefore, in SMM these UDAs implement complex mining algorithms. Thus, many new mining
                        algorithms can be integrated into SMM using these features. Naive users can invoke both built-in
                        and user defined mining algorithms with a unified syntax.
                    </li>
                </ul>
                <br>
                <ul>
                    <li><b>A rich library of mining algorithms</b> (a) that are fast and light enough to mine data
                        streams, and (b) that dovetail with the constructs and mechanisms (windows, slides, etc.) is
                        provided using the UDAs discussed above.
                    </li>
                </ul>
                <br>
                <ul>
                    <li><b>Specification of workflows</b>, which allows the advanced users/analysts to specify the
                        complete end-to-end mining process. These workflows are also invoked using the same unified
                        syntax, as discussed earlier. Workflows allow the analysts to develop complex mining processes,
                        which are then simply invoked by naive users.
                    </li>
                </ul>
                <br>

                <p><b><font size="3" face="Arial">Publications:</font></b></p>

                <li>
                    <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;"><b>Barzan Mozafari</b>, Hetal
                        Thakkar, Carlo Zaniolo. <a href="http://people.csail.mit.edu/barzan/papers/icde_2008.pdf">Verifying
                            and Mining Frequent Patterns from Large Windows over Data Streams</a>.
                        <i>In Proceedings of the 24th International Conference on Data Engineering</i> (<a
                            href="http://www.icde2008.org/">ICDE 2008</a>), Cancún, Mexico, April 7-12, 2008. <font
                            color="#ff00ff"><i>
                                <a href="http://web.eecs.umich.edu/~mozafari/release/swim.1.0.1.tar.gz"><font
                                        color="#ff00ff">Download
                                        the SWIM implementation for frequent pattern/itemset mining over data
                                        streams</font></a> and <a
                                    href="http://web.eecs.umich.edu/~mozafari/release/dtv-dfv.1.0.1.tar.gz"><font
                                        color="#ff00ff">Download the implementation for DTV and DFV
                                        verifiers.</font></a>
                            </i></font>

                    </p></li>
                <li>
                    <p style="margin: 20px 4px;">Hetal Thakkar, <b>Barzan Mozafari</b> and Carlo
                        Zaniolo, <a href="http://people.csail.mit.edu/barzan/papers/ssps_2008.pdf">
                            Designing an Inductive DSMS: the Stream Mill Experience</a>. <em>In
                            Proceedings of the 2nd International Workshop on Scalable Stream Processing
                            Systems</em> <a href="http://www.cems.uvm.edu/~ttran/SSPS08/">(SSPS 2008</a>)<em>
                            in conjunction with</em> (<a href="http://edbt2008.univ-nantes.fr/">EDBT 2008</a>),
                        Nantes, France, March 29, 2008.
                    </p></li>

                <li>
                    <p style="margin: 20px 4px;">Hetal Thakkar, <b>Barzan Mozafari</b> and Carlo
                        Zaniolo, <a href="http://people.csail.mit.edu/barzan/papers/icdm_2008.pdf">
                            A Data Stream Mining System</a>. <em>In
                        </em> <a href="http://icdm08.isti.cnr.it/">(ICDM 2008</a>),
                        Pisa, Italy, December 15-19, 2008.
                    </p></li>

                <li>
                    <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;"><b>Barzan Mozafari</b> and Carlo
                        Zaniolo.
                        <a href="http://people.csail.mit.edu/barzan/papers/icde_2010.pdf">Optimal Load Shedding with
                            Aggregates and Mining
                            Queries</a>.
                        <i>In Proceedings of the
                            26th International Conference on Data Engineering</i> (<a href="http://www.icde2010.org/">ICDE
                            2010</a>),
                        Long Beach, California, USA, March 1-6, 2010.</p></li>

                <li>
                    <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                        Hetal Thakkar, Nikolay Laptev, Hamid Mousavi, <b>Barzan Mozafari</b>, Vincenzo Russo , Carlo
                        Zaniolo.
                        <a href="http://people.csail.mit.edu/barzan/papers/icde_2011.pdf">SMM: a Data Stream Management
                            System for Knowledge Discovery</a>.
                        <i>In Proceedings of the 27th International Conference on Data Engineering</i> (<a
                            href="http://www.icde2011.org/">ICDE 2011</a>),
                        Hannover, Germany, April 11-16, 2011.</p></li>

                <li>
                    <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                        Kai Zeng, <b>Barzan Mozafari</b>, Shi Gao, and Carlo Zaniolo.
                        <a href="http://people.csail.mit.edu/barzan/papers/uncertainty-tech.pdf">Uncertainty Propagation
                            in Complex Query Networks on Data Streams: A New Paradigm for Load Shedding</a>.
                        <i> Technical Report, 120016, UCLA, 2011.
                        </i></p></li>
                <i>


                    <br>

                    <h2>
                        <p style="line-height: 200%;">
                            <a name="blogocenter"><b><font size="6" face="Arial"></font></b></a><b><font size="6"
                                                                                                         face="Arial"><a
                                        href="http://oak.cs.ucla.edu/blogocenter/">User Modeling
                                        (BlogoCenter)</a></font></b>
                        </p>
                    </h2>
                    <p>
                        The overall goal of the BlogoCenter project was to develop innovative technologies to build a
                        system that will (1) continuously monitor, collect, and store personal Weblogs (or blogs) at a
                        central location, (2) discover hidden structures and trends automatically from the blogs, and
                        (3) make them easily accessible to general users. By making the new information on the blogs
                        easy to discover and access, this project aimed at helping blogs realize their full potential
                        for societal change as the "grassroots media."
                    </p>

                    <p><b><font size="3" face="Arial">Publications (see <a href="http://oak.cs.ucla.edu/blogocenter/">BlogoCenter</a>
                                for complete list):</font></b></p>

                    <li>
                        <p style="margin: 20px 4px;">Rodrigo B. Almeida, <b>Barzan Mozafari</b>, Junghoo
                            Cho. <a href="http://people.csail.mit.edu/barzan/papers/icwsm_2007.pdf">On the
                                Evolution of Wikipedia</a><em> In Proceedings of the International Conference
                                on Weblogs and Social Media </em><em style="font-style: normal;">(<a
                                    href="http://www.icwsm.org/2007/index.html">ICWSM
                                    2007</a>),</em> Boulder, Colorado, U.S.A., March 26-28, 2007.
                        </p></li>


                    <li>
                        <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;"><b>Barzan Mozafari</b> and
                            Carlo Zaniolo. <a href="http://people.csail.mit.edu/barzan/papers/vldb_2009.pdf">Publishing
                                Naive Bayesian Classifiers: Privacy without Accuracy Loss</a>.
                            <i>In Proceedings of the 35th International Conference on Very Large Data Bases</i> (<a
                                href="http://vldb2009.org/">VLDB
                                2009</a>), Lyon, France, August 24-28, 2009.
                        </p></li>

                </i></i></div>
        <i><i> <!-- /row -->
            </i></i></div>
    <i><i> <!-- /container -->


        </i></i></div>