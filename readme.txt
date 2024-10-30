=== Check Port ===
Contributors: tananaev
Tags: port, tcp
Requires at least: 3.0.1
Tested up to: 4.4.2
Stable tag: 1.1
License: Apache License, Version 2.0
License URI: http://www.apache.org/licenses/LICENSE-2.0

Plugin to check TCP ports.

== Description ==

Plugin to check if specified TCP port is open on a selected host. Plugin adds an AJAX call for checking ports.

Exaple usage:

`<script>
jQuery.post("http://localhost/wp-admin/admin-ajax.php", {
    action:"port_check",
	address:"8.8.8.8",
	port:80
}, function(result) {
      alert(result);
});
</script>`
