<?php printNewsEntryHeader(__FILE__, "Do not shoot the error"); ?>

<p>Dear 4diac community,
</p>

<p>Our team is actively working on the upcoming release, and we're excited to share some updates on our progress. 
We're putting a lot of effort into ensuring that the new release meets our users' expectations, and we're working hard to deliver new features and enhancements that will make automation solution development even more efficient and intuitive. </p>

<p>
The last version of the 4diac IDE already supported <i>error markers</i>, making it easier to work with inconsistencies in your projects.
</p>

<p>
The addition of error markers is a significant usability improvement, providing a clear indication of where errors exist in your code. 
This feature allows users to load broken projects, make changes, and fix errors later. 
This is a welcome enhancement for users who have been frustrated with the inability to work with inconsistent projects. 
The feature will make it easier to identify and address errors in the code, streamlining the process of creating automation solutions.
</p>

<p>
In earlier versions of Eclipse 4diac, certain operations were prohibited because they could potentially lead to errors. 
However, with the new update, these operations are now allowed, and any resulting errors can be easily handled using the error markers feature.
</p>

<p>
Michael, the developer who implemented this feature, says that <i>"The implementation of the error markers feature in Eclipse 4diac required a novel approach that involves refactoring features for resolving the errors seamlessly. When loading projects, we scan the project's XML code in real-time, identify errors, and highlight them in the source code editor. We spent a considerable amount of time testing the feature to ensure that it works seamlessly with the rest of the IDE.</i>"
</p>

<p>
If you're interested in learning more about the error markers feature in the 4diac IDE, we encourage you to check out Michael's publication where he discusses the feature and its implementation in more detail. You can find the link to the paper <a href="https://www.scitepress.org/Link.aspx?doi=10.5220/0011683800003402">here</a>. 
Happy reading!</p>

<?php include 'greeting.html';?>
