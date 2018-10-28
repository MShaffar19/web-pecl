<?php

/*
  +----------------------------------------------------------------------+
  | The PECL website                                                     |
  +----------------------------------------------------------------------+
  | Copyright (c) 1999-2018 The PHP Group                                |
  +----------------------------------------------------------------------+
  | This source file is subject to version 3.01 of the PHP license,      |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | https://php.net/license/3_01.txt                                     |
  | If you did not receive a copy of the PHP license and are unable to   |
  | obtain it through the world-wide-web, please send a note to          |
  | license@php.net so we can mail you a copy immediately.               |
  +----------------------------------------------------------------------+
  | Authors:                                                             |
  +----------------------------------------------------------------------+
*/

/**
 * The bug system home page
 *
 * @category  pearweb
 * @package   Bugs
 */

response_header('Bugs');
?>


<h1>PECL Bug Tracking System</h1>

<p>
 If you need support or you don't really know if the problem you found
 is a bug, please use our
 <?php echo make_link('/support.php', 'support channels'); ?>.
</p>

<p>
 Before submitting a bug, please make sure nobody has already reported it by
 <?php echo make_link('https://bugs.php.net/search.php', 'searching the existing bugs'); ?>.
 Also, read the tips on how to
 <?php echo make_link('https://bugs.php.net/how-to-report.php',
                  'report a bug that someone will want to help fix', 'top'); ?>.
</p>

<p>Now that you are ready to proceed:</p>

<ul>
  <li>
   If you want to report a bug for a <strong>specific package</strong>,
   please go to the package home page using the
   <?php echo make_link('/packages.php', 'Browse&nbsp;Packages');?> tool
   or the <?php echo make_link('/package-search.php', 'Package&nbsp;Search'); ?>
   system.
  </li>

  <li>
   If the bug you found does not relate to a package, one of the following
   categories should be appropriate:
   <?php print make_bug_link('Web Site', 'report', '<strong>Web&nbsp;Site</strong>');?>,
   <?php print make_bug_link('Documentation', 'report', '<strong>Documentation</strong>'); ?> or
   <?php print make_bug_link('Bug System', 'report', '<strong>Bug&nbsp;System</strong>'); ?>.
   Do be aware that this &quot;Bug System&quot; link is
   <strong>only</strong> for reporting issues with the
   <strong>user interface</strong> for reporting, searching and
   editing the bugs, so is <strong>not</strong> for reporting bugs
   about packages or other parts of the website.
  </li>
</ul>

<p>
You may find the
<?php echo make_link('https://bugs.php.net/stats.php', 'Bug Statistics'); ?> page interesting.
</p>

<?php

response_footer();
