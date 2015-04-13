<?php

class Initial extends CI_Model
{
    public function initial_people($project_name, $author_name)
    {
        $project = $this->db->select('*')->from('projects')
            ->where('name', $project_name)->get()->result_array();
        $i = 1;
        $this->db->insert('people', array(
            'name' => $author_name,
            'pj_id' => $project[0]['id']
        ));
        /*if(!empty($author_name)){
            foreach($author_name as $author){
                $this->db->insert('people', array(
                        'name' => $author,
                        'pj_id' => $project_id
                    ));
                $i += 1;
            }
        }*/
        return true;
    }

    public function initial_des($project_name, $title, $content)
    {
        $project = $this->db->select('*')->from('projects')
            ->where('name', $project_name)->get()->row_array();
        $this->db->insert('description', array(
            'pj_id' => $project['id'],
            'title' => $title,
            'content' => $content,
        ));
    }

    public function initial_pub($project_name, $author_name, $title, $info, $link, $pre_magzine, $magzine, $magzine_link, $fellow)
    {
        $project = $this->db->select('*')->from('projects')
            ->where('name', $project_name)->get()->result_array();
        $this->db->insert('publication', array(
            'pj_id' => $project[0]['id'],
            'title' => $title,
            'magzine' => $magzine,
            'first_author' => $author_name,
            'pre_magzine' => $pre_magzine,
            'link' => $link,
            'magzine_link' => $magzine_link,
            'info' => $info,
            'fellow' => $fellow
        ));

    }

    public function initial_project()
    {
        $this->db->insert('projects', array(
            'name' => 'DBSeer',
            'summary' => ': Performance Prediction for a Scalable Database-as-a-Service',
            'description' => "Cloud computing is characterized by a shared infrastructure and a decoupling between its operators and tenants. These two characteristics impose new challenges to databases applications hosted in the cloud, namely: (i) how to price database services, (ii) how to isolate database tenants, and (iii) how to optimize database performance on this shared infrastructure. Today's solutions, based on virtual-machines, do not properly address these challenges. These three challenges share a common need for accurate predictive models of performance and resource utilization. DBSeer is a research prototype of the predictive models that we have developed for the important class of OLTP/Web workloads.",
            'jump' => 'http://web.eecs.umich.edu/~mozafari/projects.html#dbseer',
            'website' => 'http://dbseer.org'
        ));

        $this->db->insert('projects', array(
            'name' => 'Crowdsourcing Big Data',
            'description' => "Crowdsourcing has become a very popular means of performing tasks that require human intelligence. But what do you do when your dataset is too 'big'? Imagine having to deal with web-scale data: there are hundreds of millions of daily tweets and images. Even if labeling each label costs a penny, your company will soon go bankrupt! We have started a new project here at MIT that aims to scale crowdsourcing to Big Data.",
            'jump' => 'http://web.eecs.umich.edu/~mozafari/projects.html#crowdsourcing',
            'website' => 'http://web.eecs.umich.edu/%7Emozafari/projects.html'
        ));

        $this->db->insert('projects', array(
            'name' => 'BlinkDB',
            'summary' => ': Querying Petabytes of Data in a "Blink" Time!',
            'description' => "Today's web is predominantly data-driven. People increasingly depend on enormous amounts of data (spanning terabytes or even petabytes in size) to make intelligent business and personal decisions. Often the time it takes to make these decisions is critical. However, unfortunately, quickly analyzing large volumes of data poses significant challenges. For instance, scanning 1TB of data may take minutes, even when the data is spread across hundreds of machines and read in parallel. BlinkDB is a massively parallel, sampling-based approximate query engine for running interactive queries on large volumes of data. The key observation in BlinkDB is that one can make perfect decisions in the absence of perfect answers. For example, reliably detecting a malfunctioning server in a distributed collection of system logs does not require knowing every request the server processed. Based on this insight, BlinkDB allows one to tradeoff between query accuracy and response time, enabling interactive queries over massive data by running queries on data samples. To achieve this, BlinkDB uses two key ideas that differentiate it from previous sampling-based database systems: (1) an optimization framework to build a set of multi-dimensional, multi-resolution samples, and (2) a strategy that uses a set of small samples to dynamically estimate a query's error and response time at run-time. We have built a BlinkDB prototype, and validate its effectiveness using well-known benchmarks and a real-world workload derived from Conviva. Our initial set of experiments show that BlinkDB can execute a range of queries over a real-world query trace on up to 17 TB of data and 100 nodes in 2 seconds, with an error of 2-10%.",
            'jump' => 'http://web.eecs.umich.edu/~mozafari/projects.html#crowdsourcing',
            'website' => 'http://blinkdb.org'
        ));

        $this->db->insert('projects', array(
            'name' => 'High-Performance Complex Event Processing',
            'description' => "Complex Event Processing (CEP) is a broad term, referring to any application that involves searching for complex patterns among raw events to infer higher-level concepts. Examples include high-frequency trading (a certain correlation in stock prices that triggers a purchase), intrusion detection (a series of network activities that indicate an attack), inventory management (moving patterns using RFID or GPS readings), click stream analysis (a sequence of clicks that trigger an ad), and electronic health systems (a combination of sensor readings raising an alert). CEP applications have created a fast-growing market, with an annual growth rate of 30% (see Celent report). This growing market has led database vendors to add new constructs (called MATCH_RECOGNIZE) to the SQL language that allow for expressing sequential patterns among the rows in a table.
                Seeking richer abstractions for supporting CEP applications, we have introduced constructs based on Kleene-closure expressions and showed that they are significantly more powerful than those proposed by database vendors (which are provably incapable of expressing many important CEP queries). We have designed the first two database query languages that used nested word automata (NWA) as their underlying computational model: K*SQL with a relational interface, and XSeq with an XML interface. NWAs are recent advances in the field of automata theory that generalize the notion of regular languages to capture data that has both sequential and hierarchical structures. Examples of such data are XML, JSON files, RNA proteins, and traces of procedural programs.
                    K*SQL solves the long-standing problem of providing a unified query engine for both relational and hierarchical data. Similarly, despite 15 years of previous research where using tree automata for XML optimization was the status quo, XSeq translates XML queries into NWAs (which are then optimized using my algorithms) and outperformes the state-of-the-art XML engines by several orders of magnitude. XSeq received the SIGMOD's best paper award in 2012.",
            'status' => 'past',
            'jump' => 'http://web.eecs.umich.edu/~mozafari/projects.html#cep',
            'website' => 'http://yellowstone.cs.ucla.edu/projects/index.php/XSeq'
        ));

        $this->db->insert('projects', array(
            'name' => 'SMM: Stream Mill Miner',
            'summary' => ': A System for Mining Data Streams',
            'description' => "Stream Mill Miner (SMM) is an extensible online data stream mining workbench. SMM is built upon a powerful data stream management system, namely StreamMill. Stream Mill is efficiently supports continuous queries, which are critical in many application areas, including sensors networks, traffic monitoring and intrusion detection. Stream Mill achieves a much broader range of usability and effectiveness in its application domain via minimal but powerful extensions to SQL. SMM utilizes these extensions to build an extensible online mining workbench. The main features of the SMM system are as follows:

Extensibility that allows advanced users/analysts to integrate new mining algorithms, by implementing them declaratively. This feature is supported through Stream Mill UDAs, which are either defined natively in SQL or externally in a programming language such as C/C++. Stream Mill UDAs provide tremendous expressive power to the users, both theoretically and practically. Therefore, in SMM these UDAs implement complex mining algorithms. Thus, many new mining algorithms can be integrated into SMM using these features. Naive users can invoke both built-in and user defined mining algorithms with a unified syntax.

A rich library of mining algorithms (a) that are fast and light enough to mine data streams, and (b) that dovetail with the constructs and mechanisms (windows, slides, etc.) is provided using the UDAs discussed above.

Specification of workflows, which allows the advanced users/analysts to specify the complete end-to-end mining process. These workflows are also invoked using the same unified syntax, as discussed earlier. Workflows allow the analysts to develop complex mining processes, which are then simply invoked by naive users.",
            'status' => 'past',
            'jump' => 'http://web.eecs.umich.edu/~mozafari/projects.html#smm',
            'website' => 'http://yellowstone.cs.ucla.edu/projects/index.php/SMM'
        ));

        $this->db->insert('projects', array(
            'name' => 'User Modeling (BlogoCenter)',
            'description' => "The overall goal of the BlogoCenter project was to develop innovative technologies to build a system that will (1) continuously monitor, collect, and store personal Weblogs (or blogs) at a central location, (2) discover hidden structures and trends automatically from the blogs, and (3) make them easily accessible to general users. By making the new information on the blogs easy to discover and access, this project aimed at helping blogs realize their full potential for societal change as the 'grassroots media.",
            'status' => 'past',
            'jump' => 'tp://web.eecs.umich.edu/~mozafari/projects.html#smm',
            'website' => 'http://oak.cs.ucla.edu/blogocenter/'
        ));
    }
}