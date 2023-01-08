<h1>files.gracee.ga</h1>
<h3><a href="https://files.gracee.ga">Click here to use the official version</a></h3>
<h2>requirements&gt;</h2>
<ul>
<li><strong>MySQL Database</strong></li>
<li><strong>PHP and Javascript compatible site</strong></li>
<li><strong>Knowledge of PHP, Js, HTML, PHP</strong></li>
</ul>
<h2>setup&gt;</h2>
<h4>&gt;Setting up your database</h4>
<p>In order to setup your database, you require a table created. So run this SQL script</p>
<table style="width: 54.9716%; border-collapse: collapse; background-color: black; float: left; height: 93px;" border="0">
<tbody>
<tr>
<td style="width: 100%;"><span style="color: #ffffff;">CREATE TABLE files (</span><br /><span style="color: #ffffff;">id INT AUTO_INCREMENT PRIMARY KEY,</span><br /><span style="color: #ffffff;">name VARCHAR(255) NOT NULL,</span><br /><span style="color: #ffffff;">path VARCHAR(255) NOT NULL,</span><br /><span style="color: #ffffff;">created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP</span><br /><span style="color: #ffffff;">);</span></td>
</tr>
</tbody>
</table>
<p><strong>&gt;Setting up the website</strong></p>
<p>Here's the easiest part, download the files in here and put them in your file manager or folder, whatever you use to host your website basically.</p>
<p>Make sure to create a "Files" folder.</p>
<p>Now, in order to get everything working you need to go in the "upload.php" &amp; "list.php" files, find the database login section and fill in the information.</p>
<p>That's it! You should now have a fully functioning file hosting tool.</p>
<h4><em>Please keep the watermark! 🚨</em></h4>
