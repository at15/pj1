-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 02:13 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pj1`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `pj_id` int(255) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=163 ;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`pj_id`, `content`, `title`, `id`, `order`) VALUES
(396, 'CIDR is based on a revolutionary vision which is quite different than the mainstream database conferences. This is what their website says: \n\nThe biennial Conference on Innovative Data Systems Research (CIDR) is a systems-oriented conference, complementary in its mission to the mainstream database conferences like SIGMOD and VLDB, emphasizing the systems architecture perspective. CIDR gathers researchers and practitioners from both academia and industry to discuss the latest innovative and visionary ideas in the field. \n\nDBSeer is now accepted in CIDR''s Outrageous Ideas and Vision Track. I am looking forward to presenting our DBSeer in January 2013!', 'News: Our paper got in CIDR 2013! ', 158, 0),
(396, 'Download it from here. Email me if you run into any issues.', 'News: DBSeer''s monitoring module is now open-source! ', 159, 0),
(396, 'Teradata is a leading provider of enterprise analytic technologies and services that include Data Warehousing, Business Intelligence and CRM. A few months ago I presented DBSeer at Dagstuhl''s Database Workload Management Workshop which is where I met a member of Teradata''s workload management team. Long story short, as a result of the meetings that followed (between the Teradata''s technical managers and I), Teradata has decided to port DBSeer into their framework with the goal of automating their workload management mechanisms, which are currently based on manual configuration of a set of rules (called throttles). Exciting news is that with the allocation of engineering resources at Teradata to this project, the adoption of DBSeer into their framework has now officially started! I am already excited and looking forward to this collaboration and to see DBSeer''s applications in a large commercial database system!', 'News: Teradata has assigned a team of engineers to incorporate DBSeer into their framework! ', 160, 0),
(396, 'The annual ACM SIGMOD/PODS conference is a leading international forum for database researchers, practitioners, developers, and users to explore cutting-edge ideas and results, and to exchange techniques, tools, and experiences. The full version of our DBSeer paper is now accepted in SIGMOD 2013, and I am looking forward to presenting DBSeer in June 2013! Recently I have been traveling a lot, so I am extra excited that this year''s SIGMOD is held somewhere close to Boston (it is held in New York)!', 'News: Our paper got in SIGMOD 2013! ', 161, 0),
(396, 'DBSeer has received considerable coverage from the press soon after MIT News Office did a story on DBSeer! Read more here.', 'News: DBSeer in the press! ', 162, 0);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `name` text NOT NULL,
  `pj_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=186 ;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`name`, `pj_id`, `id`) VALUES
('Barzan Mozafari, Carlo Curino, and Samuel Madden.', 396, 180),
('', 397, 181),
('Sameer Agarwal, Barzan Mozafari, Aurojit Panda, Henry Milner, Samuel Madden and Ion Stoica', 398, 182),
('', 399, 183),
('', 400, 184),
('', 401, 185);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'current',
  `website` text NOT NULL,
  `summary` text,
  `jump` text NOT NULL,
  `num_of_news` int(11) NOT NULL,
  `num_of_publications` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=402 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `status`, `website`, `summary`, `jump`, `num_of_news`, `num_of_publications`) VALUES
(396, 'DBSeer', 'Cloud computing is characterized by a shared infrastructure and a decoupling between its operators and tenants. These two characteristics impose new challenges to databases applications hosted in the cloud, namely: (i) how to price database services, (ii) how to isolate database tenants, and (iii) how to optimize database performance on this shared infrastructure. Today''s solutions, based on virtual-machines, do not properly address these challenges. These three challenges share a common need for accurate predictive models of performance and resource utilization. DBSeer is a research prototype of the predictive models that we have developed for the important class of OLTP/Web workloads.', 'current', 'http://dbseer.org', ': Performance Prediction for a Scalable Database-as-a-Service', 'http://web.eecs.umich.edu/~mozafari/projects.html#dbseer', 0, 0),
(397, 'Crowdsourcing Big Data', 'Crowdsourcing has become a very popular means of performing tasks that require human intelligence. But what do you do when your dataset is too ''big''? Imagine having to deal with web-scale data: there are hundreds of millions of daily tweets and images. Even if labeling each label costs a penny, your company will soon go bankrupt! We have started a new project here at MIT that aims to scale crowdsourcing to Big Data.', 'current', 'http://web.eecs.umich.edu/%7Emozafari/projects.html', NULL, 'http://web.eecs.umich.edu/~mozafari/projects.html#crowdsourcing', 0, 0),
(398, 'BlinkDB', 'Today''s web is predominantly data-driven. People increasingly depend on enormous amounts of data (spanning terabytes or even petabytes in size) to make intelligent business and personal decisions. Often the time it takes to make these decisions is critical. However, unfortunately, quickly analyzing large volumes of data poses significant challenges. For instance, scanning 1TB of data may take minutes, even when the data is spread across hundreds of machines and read in parallel. BlinkDB is a massively parallel, sampling-based approximate query engine for running interactive queries on large volumes of data. The key observation in BlinkDB is that one can make perfect decisions in the absence of perfect answers. For example, reliably detecting a malfunctioning server in a distributed collection of system logs does not require knowing every request the server processed. Based on this insight, BlinkDB allows one to tradeoff between query accuracy and response time, enabling interactive queries over massive data by running queries on data samples. To achieve this, BlinkDB uses two key ideas that differentiate it from previous sampling-based database systems: (1) an optimization framework to build a set of multi-dimensional, multi-resolution samples, and (2) a strategy that uses a set of small samples to dynamically estimate a query''s error and response time at run-time. We have built a BlinkDB prototype, and validate its effectiveness using well-known benchmarks and a real-world workload derived from Conviva. Our initial set of experiments show that BlinkDB can execute a range of queries over a real-world query trace on up to 17 TB of data and 100 nodes in 2 seconds, with an error of 2-10%.', 'current', 'http://blinkdb.org', ': Querying Petabytes of Data in a "Blink" Time!', 'http://web.eecs.umich.edu/~mozafari/projects.html#crowdsourcing', 0, 0),
(399, 'High-Performance Complex Event Processing', 'Complex Event Processing (CEP) is a broad term, referring to any application that involves searching for complex patterns among raw events to infer higher-level concepts. Examples include high-frequency trading (a certain correlation in stock prices that triggers a purchase), intrusion detection (a series of network activities that indicate an attack), inventory management (moving patterns using RFID or GPS readings), click stream analysis (a sequence of clicks that trigger an ad), and electronic health systems (a combination of sensor readings raising an alert). CEP applications have created a fast-growing market, with an annual growth rate of 30% (see Celent report). This growing market has led database vendors to add new constructs (called MATCH_RECOGNIZE) to the SQL language that allow for expressing sequential patterns among the rows in a table.\n                Seeking richer abstractions for supporting CEP applications, we have introduced constructs based on Kleene-closure expressions and showed that they are significantly more powerful than those proposed by database vendors (which are provably incapable of expressing many important CEP queries). We have designed the first two database query languages that used nested word automata (NWA) as their underlying computational model: K*SQL with a relational interface, and XSeq with an XML interface. NWAs are recent advances in the field of automata theory that generalize the notion of regular languages to capture data that has both sequential and hierarchical structures. Examples of such data are XML, JSON files, RNA proteins, and traces of procedural programs.\n                    K*SQL solves the long-standing problem of providing a unified query engine for both relational and hierarchical data. Similarly, despite 15 years of previous research where using tree automata for XML optimization was the status quo, XSeq translates XML queries into NWAs (which are then optimized using my algorithms) and outperformes the state-of-the-art XML engines by several orders of magnitude. XSeq received the SIGMOD''s best paper award in 2012.', 'past', 'http://yellowstone.cs.ucla.edu/projects/index.php/XSeq', NULL, 'http://web.eecs.umich.edu/~mozafari/projects.html#cep', 0, 0),
(400, 'SMM: Stream Mill Miner', 'Stream Mill Miner (SMM) is an extensible online data stream mining workbench. SMM is built upon a powerful data stream management system, namely StreamMill. Stream Mill is efficiently supports continuous queries, which are critical in many application areas, including sensors networks, traffic monitoring and intrusion detection. Stream Mill achieves a much broader range of usability and effectiveness in its application domain via minimal but powerful extensions to SQL. SMM utilizes these extensions to build an extensible online mining workbench. The main features of the SMM system are as follows:\n\nExtensibility that allows advanced users/analysts to integrate new mining algorithms, by implementing them declaratively. This feature is supported through Stream Mill UDAs, which are either defined natively in SQL or externally in a programming language such as C/C++. Stream Mill UDAs provide tremendous expressive power to the users, both theoretically and practically. Therefore, in SMM these UDAs implement complex mining algorithms. Thus, many new mining algorithms can be integrated into SMM using these features. Naive users can invoke both built-in and user defined mining algorithms with a unified syntax.\n\nA rich library of mining algorithms (a) that are fast and light enough to mine data streams, and (b) that dovetail with the constructs and mechanisms (windows, slides, etc.) is provided using the UDAs discussed above.\n\nSpecification of workflows, which allows the advanced users/analysts to specify the complete end-to-end mining process. These workflows are also invoked using the same unified syntax, as discussed earlier. Workflows allow the analysts to develop complex mining processes, which are then simply invoked by naive users.', 'past', 'http://yellowstone.cs.ucla.edu/projects/index.php/SMM', ': A System for Mining Data Streams', 'http://web.eecs.umich.edu/~mozafari/projects.html#smm', 0, 0),
(401, 'User Modeling (BlogoCenter)', 'The overall goal of the BlogoCenter project was to develop innovative technologies to build a system that will (1) continuously monitor, collect, and store personal Weblogs (or blogs) at a central location, (2) discover hidden structures and trends automatically from the blogs, and (3) make them easily accessible to general users. By making the new information on the blogs easy to discover and access, this project aimed at helping blogs realize their full potential for societal change as the ''grassroots media.', 'past', 'http://oak.cs.ucla.edu/blogocenter/', NULL, 'tp://web.eecs.umich.edu/~mozafari/projects.html#smm', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pj_id` int(11) DEFAULT NULL,
  `title` text,
  `magzine` text,
  `link` text,
  `magzine_link` text,
  `info` text,
  `first_author` varchar(255) DEFAULT 'Barzan Mozafari',
  `pre_magzine` text,
  `fellow` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=384 ;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `pj_id`, `title`, `magzine`, `link`, `magzine_link`, `info`, `first_author`, `pre_magzine`, `fellow`) VALUES
(365, 396, 'DBSeer: Resource and Performance Prediction for Building a Next Generation Database Cloud', 'CIDR', 'http://people.csail.mit.edu/barzan/papers/cidr_2013.pdf', 'http://www.cidrdb.org/cidr2013/index.html', ' Asilomar, California, USA, 2013.', 'Barzan Mozafari', 'In Proceedings of the Conference on Innovative Data Systems Research', 'Carlo Curino, Samuel Madden'),
(366, 396, 'Performance and Resource Modeling in Highly-Concurrent OLTP Workloads.', 'SIGMOD 2013 Conference', 'http://people.csail.mit.edu/barzan/papers/sigmod_2013.pdf', 'http://www.sigmod.org/2013/', ' SIGMOD 2013 Conference, New York, NY, USA, 2013', 'Barzan Mozafari ', 'Accepted to Appear In Proceedings of the ACM', 'Carlo Curino, Alekh Jindal, Samuel Madden'),
(367, 397, ' Active Learning for Crowd-Sourced Databases', 'Technical Report', 'http://web.eecs.umich.edu/~mozafari/datasets/crowdsourcing', '', 'Nov 2012.', 'Barzan Mozafari', '', 'Purnamrita Sarkar , Michael J. Franklin, Michael I. Jordan, Samuel Madden'),
(368, 397, ' Scaling Up Crowd-Sourcing to Very Large Datasets: A Case for Active Learning .', 'VLDB 2015', 'http://web.eecs.umich.edu/~mozafari/papers/vldb_2015_crowd.pdf', 'http://www.vldb.org/2015/', ' September 1-4, 2015', 'Barzan Mozafari', ' In Proceedings of the 41st International Conference on Very Large Data Bases', 'Purnamrita Sarkar, Michael J. Franklin, Michael I. Jordan, Samuel Madden'),
(369, 398, ' BlinkDB: Queries with Bounded Errors and Bounded Response Times on Very Large Data.', 'EuroSys', 'http://people.csail.mit.edu/barzan/papers/eurosys_2013.pdf', 'http://eurosys2013.tudos.org', 'Prague, Czech Republic, 2013.', 'Sameer Agarwal', 'To appear in Proceedings of the European Conference on Computer Systems', 'Barzan Mozafari, Aurojit Panda, Henry Milner, Samuel Madden, Ion Stoica'),
(370, 398, 'Blink and It''s Done: Interactive Queries on Very Large Data. ', '', 'http://people.csail.mit.edu/barzan/papers/vldb_2012.pdf', '', 'PVLDB, 5(12): 1902-1905, 2012.', 'Sameer Agarwal.', '', 'Aurojit Panda, Barzan Mozafari, Anand P. Iyer, Samuel Madden, Ion Stoica'),
(371, 399, 'K*SQL: A Unifying Engine for Sequence Patterns and XML. ', ' SIGMOD 2010 Conference', 'http://people.csail.mit.edu/barzan/papers/sigmod_2010.pdf', 'http://www.sigmod2010.org/index.shtml', 'Indianapolis, Indiana, USA, June 6-11, 2010 (SIGMOD 2010''s honorable mention demo)', 'Barzan Mozafari', 'In Proceedings of the ACM ', 'Kai Zeng, Carlo Zaniolo'),
(372, 399, ' From Regular Expressions to Nested Words: Unifying Languages and Query Execution for Relational and XML Sequences.', 'VLDB 2010', 'http://people.csail.mit.edu/barzan/papers/vldb_2010.pdf', 'http://www.vldb2010.org', 'Singapore, September 13-17, 2010.', 'Barzan Mozafari', '', 'Kai Zeng, Carlo Zaniolo'),
(373, 399, 'High-Performance Complex Event Processing over XML Streams. ', 'SIGMOD 2012 Conference', 'http://people.csail.mit.edu/barzan/papers/sigmod_2012.pdf', 'http://www.sigmod.org/2012/', 'Scottsdale, Arizona, USA, 2012. (SIGMOD 2012''s Best Paper Award)', '', ' In Proceedings of the ACM ', 'Kai Zeng, Carlo Zaniolo'),
(374, 399, 'Complex Pattern Matching in Complex Structures: the XSeq Approach ', 'ICDE 2013', 'http://people.csail.mit.edu/barzan/papers/icde_2013.pdf', 'http://www.icde2013.org', 'Brisbane, Australia, April, 2013', 'Kai Zeng', 'In Proceedings of the 29th International Conference on Data Engineering ', 'Mohan Yang, Carlo Zaniolo'),
(375, 399, 'High-Performance Complex Event Processing over Hierarchical Data. ', '', 'http://people.csail.mit.edu/barzan/papers/tods_2013.pdf', '', 'Dec, 2013.', 'Barzan Mozafari', 'To Appear In ACM TODS''s Special Issue on ''Best of SIGMOD', 'Kai Zeng, Loris D''Antoni, Carlo Zaniolo'),
(376, 400, ' Verifying and Mining Frequent Patterns from Large Windows over Data Streams.', 'ICDE 2008', 'http://people.csail.mit.edu/barzan/papers/icde_2008.pdf', 'http://www.icde2008.org', 'Cancún, Mexico, April 7-12, 2008. Download the SWIM implementation for frequent pattern/itemset mining over data streams and Download the implementation for DTV and DFV verifiers.', 'Barzan Mozafari', 'In Proceedings of the 24th International Conference on Data Engineering', 'Hetal Thakkar, Carlo Zaniolo'),
(377, 400, ' Designing an Inductive DSMS: the Stream Mill Experience.', 'EDBT 2008', 'http://people.csail.mit.edu/barzan/papers/ssps_2008.pdf', 'http://edbt2008.univ-nantes.fr', ' in conjunction with (EDBT 2008), Nantes, France, March 29, 2008.', 'Hetal Thakkar', 'In Proceedings of the 2nd International Workshop on Scalable Stream Processing Systems (SSPS 2008) in conjunction with ', 'Barzan Mozafari and Carlo Zaniolo'),
(378, 400, ' A Data Stream Mining System', 'ICDM 2008', 'http://people.csail.mit.edu/barzan/papers/icdm_2008.pdf', 'http://icdm08.isti.cnr.it', ' Pisa, Italy, December 15-19, 2008.', 'Hetal Thakkar', 'In ', 'Barzan Mozafari and Carlo Zaniolo'),
(379, 400, 'Optimal Load Shedding with Aggregates and Mining Queries.', 'ICDE 2010', 'http://people.csail.mit.edu/barzan/papers/icde_2010.pdf', 'http://www.icde2010.org', '  Long Beach, California, USA, March 1-6, 2010.', 'Barzan Mozafari.', 'In Proceedings of the 26th International Conference on Data Engineering', ' and Carlo Zaniolo'),
(380, 400, 'SMM: a Data Stream Management System for Knowledge Discovery.', 'ICDE2011', 'http://people.csail.mit.edu/barzan/papers/icde_2011.pdf', 'http://www.icde2011.org', ', Hannover, Germany, April 11-16, 2011.', 'Hetal Thakkar', 'In Proceedings of the 27th International Conference on Data Engineering', ', Nikolay Laptev, Hamid Mousavi, Barzan Mozafari, Vincenzo Russo , Carlo Zaniolo.'),
(381, 400, 'Uncertainty Propagation in Complex Query Networks on Data Streams: A New Paradigm for Load Shedding. ', '', 'http://people.csail.mit.edu/barzan/papers/uncertainty-tech.pdf', '', 'Technical Report, 120016, UCLA, 2011.', 'Kai Zeng', '', ', Barzan Mozafari, Shi Gao, and Carlo Zaniolo.'),
(382, 401, 'On the Evolution of Wikipedia', 'ICWSM 2007', ' http://people.csail.mit.edu/barzan/papers/icwsm_2007.pdf', 'http://www.icwsm.org/2007/index.html', ', Boulder, Colorado, U.S.A., March 26-28, 2007.', 'Rodrigo B. Almeida', 'In Proceedings of the International Conference on Weblogs and Social Media', ', Barzan Mozafari, Junghoo Cho.'),
(383, 401, 'Publishing Naive Bayesian Classifiers: Privacy without Accuracy Loss.', 'VLDB 2009', 'http://people.csail.mit.edu/barzan/papers/vldb_2009.pdf', 'http://vldb2009.org', ' Lyon, France, August 24-28, 2009.', 'Barzan Mozafari.', 'In Proceedings of the 35th International Conference on Very Large Data Bases', ' and Carlo Zaniolo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'jack', '28ff41cddb4d370580fca139568ba38b0ddd12c1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
