<?php
/**
 * Vercel Speed Insights Integration
 * 
 * This file contains the Vercel Speed Insights tracking script.
 * Include this file in the <head> section of your PHP pages using:
 * <?php include('speed-insights.php'); ?>
 * 
 * Documentation: https://vercel.com/docs/speed-insights/quickstart
 */
?>
<!-- Vercel Speed Insights -->
<script>
  window.si = window.si || function () { (window.siq = window.siq || []).push(arguments); };
</script>
<script defer src="/_vercel/speed-insights/script.js"></script>
