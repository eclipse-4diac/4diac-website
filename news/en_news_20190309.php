<?php printNewsEntryHeader(__FILE__, "4diac @ Inspire Automation Camp"); ?>

<p><a href="https://www.fortiss.org">fortiss</a> showed two 4diac-based demonstrators at the <a hre="https://events.festo.com/EventPlus/event/Ou2qEOWcz9">Inspire Automation Camp</a> from 25th to 27th February organized by <a href="https://www.festo.com">Festo</a> in Esslingen.</p>

<p>A Pick-and-Place module demonstrates the skill-based approach for an automation system using OPC UA. The module consists of a vertical axis, a horizontal axis, a gripper and a conveyor belt that are controlled by a Festo CECC-D, an emBrick, a Kunbus RevolutionPi and an INSYS MRX3 respectively. This engineering approach hides the implementation complexity on the target system by providing a standardized interface to the process via skills. The gripper, for example, is controlled by a skill <i>gripper</i> that can be called via OPC UA.</p>

<p>The second demonstrator shows 4diac's TSN capabilities by sending two streams, a prioritized TSN stream and a non-prioritized best-effort stream, between two Beaglebone Black devices via 3 TTTech Akro 6/0 TSN switches. All devices have a common time base, which is achieved by the Precision Time Protocol (IEEE1588 - PTP). The prioritized stream is synchronized to a specific sending time point. The demonstrator shows on the one hand how 4diac uses the deterministic features of TSN, which means that the transmission of packets can be guaranteed and on the other hand that synchronizing the application and network schedule reduces latency and jitter of the transmitted packets.</p>

<figure>
	<img src="news/figs/TSN.jpg" width="440px" alt="TSN demonstrator"/>
	<img src="news/figs/Skills.jpg" width="340px" alt="OPC UA demonstrator"/>
	<figcaption>Demonstrators at the Inspire Automation Camp, left TSN demonstrator, right OPC UA demonstrator</figcaption>	
</figure>

<?php include 'greeting.html';?>





