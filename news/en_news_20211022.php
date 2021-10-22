<?php printNewsEntryHeader(__FILE__, "Use of Eclipse 4diac at HIT Robot Group", "img/uws.png"); ?>

<p>Today we have something new in our news section an interview with one of our latest users Tibalt Zhao from HIT Robot Group.</p>


<table class="news">
  <tr>
    <td>Alois:</td>
    <td>Who are you?</td>
    <td rowspan="3"><img alt="Tibalt Zhao R&D team lead at HIITTECH" width="140" src="news/figs/hitrobogroup/TibaltZhao.jpg"></td>
  </tr>
  <tr>
    <td>Tibalt:</td>
    <td> We are the R&amp;D team of HIITTECH (哈工智云) which is incubated from <a href="http://www.hrgrobotics.cn/en/">HIT robot group</a>. 
		Our company is dedicated in delivering software solution for advanced process control. 
		Currently, we are focusing on cement industry and circulate fluid bed (a kind of boiler).  
		I am the team leader. 
		The team comprises of software engineers and service engineers.</td>
  </tr>
  <tr>
    <td>Alois:</td>
    <td colspan="2">How did you learn  about IEC61499 and the Eclipse 4diac project?</td>
  </tr>
  <tr>
    <td>Tibalt:</td>
    <td colspan="2"> 
    	We are a team experienced both in terminal units and SCADA systems applied in the electricity grid. 
    	We have our own flow (graphical) programming platform to develop control logic in terminal units. 
    	The platform is a key to ensure quality for requirements different from batch to batch of hardware delivery. 
    	We are following the status of  IEC 61131 and IEC 61499 as they are the standard for industrial control languages. 
    	Eclipse 4diac is one of the most popular open-source project for IEC 61499.  
    	And at the beginning of our project, our colleagues recommended Eclipse 4diac to us. 
    	And after looked into the docs and codes, we decided to adopt 4diac as our control platform.</td>
  <tr>
    <td>Alois:</td>
    <td colspan="2">You have contributed many bug fixes and enhancements to the 4diac project. So, what’s your team’s goal?</td>
  </tr>
  <tr>
    <td>Tibalt:</td>
    <td colspan="2"> 
    When I am designing the architecture, I read from you and James Christensen that IEC 61499 is a standard for software reuse in embedded, 
    distributed control systems.” 
    This is what we are looking for, the philosophy, standard, graphical programming, and the open-source project. <br/>
	
	We are feeding back with code for bug fix, enhancements, and suggestions to the 4diac project as we respect EPL license. 
	We believe that the community’s prosperity could benefit all who are working with 4diac and IEC 61499. 
	Our business value is in FBs we are encapsulated and total solution we delivered to our customer with HMI and big data database.</td>
  </tr>

  <tr>
    <td>Alois:</td>
    <td colspan="2">What do you like most on 4diac?</td>
  </tr>
  <tr>
    <td>Tibalt:</td>
    <td colspan="2"> First, the tiny footprints of the run time environment.
Second, the architecture taking care of hard real time application. 
And the RTE which could run cross platform including Linux, windows, freeRTOS and so on. </td>
  </tr>

  <tr>
    <td>Alois:</td>
    <td colspan="2">What in 4diac is disturbing your work most?</td>
  </tr>
  <tr>
    <td>Tibalt:</td>
    <td colspan="2"> The way to composite function block is a little bit disturbing as we have done lots of CFBs. We hope to see the subapplication type soon. I heard that in 2.0.0 release, we can have subapplication type.

  <tr>
    <td>Alois:</td>
    <td colspan="2">Yes we are working hard to make subapplication support better. But what is exactly the problem of CFBs if I may ask?</td>
  </tr>
  <tr>
    <td>Tibalt:</td>
    <td colspan="2"> 
    First, every time we make a CFB, we need to generate cpp codes from IDE and compile them with source code of forte before it can be tested. 
    You know, the process can be done for several times to get the CFB ready to release even by an experienced engineer. 
    And even a tiny new requirement, for example change the pin name or add an output pin to give more details of failure execution, 
    we have to repeat the compilation process. 
    Secondly, IDE cannot “watch” in the second tier of function block network, which means if there is a CFB embedded inside another CFB, 
    it is almost impossible to debug. 
    Engineers need a good way to encapsulate the FBs as we all know that a very big FBN is too complex to maintain. 
    We can make the basic blocks in IDE is a good start. 
    But please make the process simple that the service engineer could build the blocks by themselves within IDE.</td>
  </tr> 

  <tr>
    <td>Alois:</td>
    <td colspan="2">Can you describe/show something about your first 4diac application?</td>
  </tr>
  <tr>
    <td>Tibalt:</td>
    <td colspan="2"> 
    Sure. Our application is the advanced process control for a mill. 
    <figure>
    	<img alt="function block network of the advanced process control" width="600" src="news/figs/hitrobogroup/fbn.png">
    	<figcaption>Function block network of the advanced process control.</figcaption>
    </figure>
    The mill consumes around 192,000 KWh electricity per day to spit out around 9600 tons of crushed raw materials 88% of which is smaller than 80 micrometer. 
    Before the installation of our software, the mill is operated by 3 operators per day. 
    During working hours, they must focus on the conditions of the mill and taking care of the feeding speed of raw materials and water, roller pressure, fan speed, separator speed, and so on. 
    After the installation of our solution, their workload is greatly reduced, and the condition of the raw mill is much more stable. 
	Below are numbers compared between controlled by operator alone and operator with APC solution. 
	
	<figure>
    	<img width="600" src="news/figs/hitrobogroup/comparison.png">
    	<figcaption>The comparison of critical parameters.</figcaption>
    </figure>
	
	<figure>
    	<img width="600" src="news/figs/hitrobogroup/elconsumption.png">
    	<figcaption>The comparison of electricity consumption.</figcaption>
    </figure>
    
	<figure>
    	<img width="600" src="news/figs/hitrobogroup/averageproduction.png">
    	<figcaption>The comparison of the average production per hour.</figcaption>
    </figure>
    
    
    <figure>
    	<img width="600" src="news/figs/hitrobogroup/resultingimprovement.png">
    </figure>
    
    
    
	</td>
  </tr> 

  <tr>
    <td>Alois:</td>
    <td colspan="2">Wow this is pretty impressive. Thanks a lot for your insights.</td>
  </tr>

</table><br/>

