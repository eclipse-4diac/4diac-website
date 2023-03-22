<?php printNewsEntryHeader(__FILE__, "Sunsetting 4diac IDE's Virtual DNS Infrastructure"); ?>

<p>
In the beginning of 4diac IDE, we introduced Virtual DNS as a means to easily collect configuration values for IOs and communication FBs. 
It was a simple key-value store that greatly reduced the effort. But it was never more than that and had its problems 
(e.g., editing Virtual DNS in a <a href=”https://bugs.eclipse.org/bugs/show_bug.cgi?id=568770”>view is a pain</a>).
</p>

<p>
In the last months, as part of the work on improving our IEC 61131-3 structured text support, we added a new feature: a file format for providing a set of globally available constants. 
This feature is now in a state where it can replace the Virtual DNS. Therefore, we will start the process of removing Virtual DNS from the development branch of 4diac IDE. 
With the next release it will not be available any more.
</p>

<p>
If you want to try out our new global constants feature get <a href=”https://download.eclipse.org/4diac/updates/rc/”>4diac IDE's latest RC build</a>.
There, you can simply create a file with the extension <code>globalconsts</code> and open it in the default editor. In this editor, you can specify your constants textually:
</p>

<p style="padding-left: 40px;" >
<code >
VAR_GLOBAL CONSTANT<br>
&nbsp;&nbsp;&nbsp;&nbsp;PI : REAL := 3.1415;<br>
&nbsp;&nbsp;&nbsp;&nbsp;PI_HALF : REAL := PI / 2.0;<br>
&nbsp;&nbsp;&nbsp;&nbsp;TWO_PI : REAL := PI * 2.0;<br>
END_VAR<br>
</code>
</p>

<p>
You can use the constants in any place in 4diac IDE where literals of the specified type are allowed (e.g., a pin of an FB). 
The great advantage of the global constants is that they are typed. With that, we can provide feedback whether the constant is allowed at the place you are using it. 
Also, code completion is possible.
</p>

<p>
Looking forward to your feedback.
</p>

<?php include 'greeting.html';?>
