<?php
$page_title   = 'Privacy Policy';
$current_page = 'privacy';
require 'includes/head.php';
?>

<h2>// PRIVACY POLICY :::</h2>
<div class="command-line">
    <span class="prompt">$ cat privacy.txt</span><br>
    ─ Applies to: the monkeyx.net rclone API client<br>
    ─ Last updated: 18 November 2026
</div>

<hr class="section-divider">

<h2>// PURPOSE</h2>
<p>
    The monkeyx.net rclone app is a private API client used with
    <a href="https://rclone.org">rclone</a> to copy, sync and back up data
    between the owner's own storage locations. It exists solely for internal use
    by the site owner and authorised internal users, working on their own data.
</p>

<h2>// WHO CAN USE IT</h2>
<p>
    The app is not offered to the public. It is used only by the site owner and
    authorised internal users. It is not used to access, collect or process data
    belonging to any third party.
</p>

<h2>// DATA ACCESSED</h2>
<p>
    When an authorised user signs in, the app is granted access to that user's own
    cloud storage account only, and only for the purpose of copying files to and
    from storage the user controls. The app:
</p>
<p>
    ▸ accesses only the files the user chooses to copy or sync<br>
    ▸ does not collect personal information about the user or anyone else<br>
    ▸ does not access, collect or store third-party data<br>
    ▸ does not analyse, profile or use data for advertising<br>
    ▸ does not use data to train any AI or machine-learning models
</p>

<h2>// STORAGE &amp; SECURITY</h2>
<p>
    Files are transferred directly between the user's own storage locations by rclone.
    Access tokens are stored locally in the user's rclone configuration on their own
    machines and are never sent to monkeyx.net or any other party. Data is not stored
    on any server operated for this app.
</p>

<h2>// SHARING</h2>
<p>
    No data is sold, rented, shared or disclosed to any third party.
</p>

<h2>// REVOKING ACCESS</h2>
<p>
    Access can be revoked at any time from the security / connected apps settings of
    the cloud storage account, or by deleting the remote from the local rclone
    configuration.
</p>

<h2>// CHANGES</h2>
<p>
    This policy may be updated from time to time. The date at the top of this page
    shows when it was last changed.
</p>

<h2>// CONTACT</h2>
<p>
    Questions about this policy can be directed to the owner of monkeyx.net.
</p>

<?php require 'includes/footer.php'; ?>
