<?php printNewsEntryHeader(__FILE__, "Improving 4diac Deployment"); ?>

<p>In our currently running <a href="https://eclipse.dev/4diac/en_news.php#en_news_20181203">usability survey</a> a hotspot for disappointment is showing up, namely the application deployment.  
Interestingly we started on this already in the last release. With 4diac 1.10. the following improvements are available:</p>
<ul>
	<li><b>No more connection refused error messages:</b> 4diac IDE automatically deactivates monitoring if needed and after the deployment re-enables it.</li> 
	<li><b>No more invalid state error messages:</b> Deployment checks the running resources in a device and lets you overwrite them:<br/>
	<img src="news/figs/replace_resources.png" alt="New dialog asking if resources should be replaced">
	</li>
	<li><b>Deploy from where you want:</b> 
		With a new deploy main menu and pop-up menu you can select deployable entities (i.e., resources, devices, or full systems) and deploy them on the fly.
		<table>
			<tr>
				<td width="50%" style='padding-right:10px;'>
					<img src="news/figs/deploy_sysexplorer.png" alt="Deploy from system explorer">							
				</td>
				<td width="50%" style='padding-right:10px;'>
					<img src="news/figs/deploy_sysconf.png" alt="Deploy from system configuration editor">							
				</td>
			</tr>
		</table>
	</li>
</ul> 

<p>We hope that this makes deploying a less painful experience in 4diac IDE.</p>

<h3>Outlook</h3>
<p>However we know that this is only a first step. 
More work is needed to fully get rid of the deployment perspective as a whole.</p>

<p>Furthermore there is a major disturbing step in deployment that we haven’t talked about yet: FB type management. 
Every time you change an FB or create a new one, C++ code for the FB has to be created and 4diac FORTE needs to be recompiled.</p> 

<p>In order to overcome this issue we added as experimental feature a dynamic type load option. 
Here 4diac IDE detects during deployment the availability of FB types and for missing types code is automatically generated and sent to 4diac FORTE. 
To enable this feature you need to compile 4diac FORTE with LUA enabled and change in the system configuration of your application the device profile to dynamic type load.</p> 

<p>However bear in mind that this feature is still experimental. Nonetheless we need testers for it. So we are heavily looking for your feedback on it!</p>

<p>Your feedback really always helps and there are several ways to provide it:</p>
<ul>
    <li>Submit issues and suggestions through our <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=4DIAC">bug tracker</a></li>
    <li>Fill out our anonymous <a href="https://goo.gl/forms/hVivvJKgTbD9HciI3">4diac IDE UX questionnaire</a></li>
    <li>Participate in our <a href="https://doodle.com/poll/ksfb2fat32zcx9zv">usability assessment</a></li>
</ul>

<p>Thanks in advance for your support,
	<br>The 4diac Team</p>
<br>
