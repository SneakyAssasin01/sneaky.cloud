/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'computer\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-facebook': '&#xe900;',
		'icon-google-hangouts-logo': '&#xe901;',
		'icon-google-plus': '&#xe902;',
		'icon-hand-shake': '&#xe903;',
		'icon-hard-disk': '&#xe904;',
		'icon-instagram': '&#xe905;',
		'icon-keyboard-right-arrow-button': '&#xe906;',
		'icon-linkedin': '&#xe907;',
		'icon-manager': '&#xe908;',
		'icon-phone-receiver': '&#xe909;',
		'icon-pinterest': '&#xe90a;',
		'icon-placeholder-for-map': '&#xe90b;',
		'icon-prize-badge-with-star-and-ribbon': '&#xe90c;',
		'icon-quotes': '&#xe90d;',
		'icon-repair': '&#xe90e;',
		'icon-signs': '&#xe90f;',
		'icon-star': '&#xe910;',
		'icon-stethoscope': '&#xe911;',
		'icon-technology': '&#xe912;',
		'icon-tumblr': '&#xe913;',
		'icon-twitter': '&#xe914;',
		'icon-vimeo': '&#xe915;',
		'icon-viruses': '&#xe916;',
		'icon-arrow': '&#xe917;',
		'icon-badge-with-a-star': '&#xe918;',
		'icon-chevron-arrow-up': '&#xe919;',
		'icon-clock': '&#xe91a;',
		'icon-diag': '&#xe91b;',
		'icon-double-angle-pointing-to-right': '&#xe91c;',
		'icon-talk': '&#xe91d;',
		'icon-music-social-group': '&#xe91e;',
		'icon-icon': '&#xe91f;',
		'icon-wall-clock': '&#xe920;',
		'icon-menu': '&#xe921;',
		'icon-file': '&#xe922;',
		'icon-upgrade': '&#xe923;',
		'icon-updated-security-for-protection-on-internet': '&#xe924;',
		'icon-videocard': '&#xe925;',
		'icon-verification-mark': '&#xe926;',
		'icon-arrow-left': '&#xe927;',
		'icon-arrow-right': '&#xe928;',
		'icon-cancel': '&#xe929;',
		'icon-angle-down': '&#xe92a;',
		'icon-angle-up': '&#xe92b;',
		'icon-angle-right': '&#xe92c;',
		'icon-angle-left': '&#xe92d;',
		'icon-same-day-delivery': '&#xe92e;',
		'icon-shopping-cart': '&#xe92f;',
		'icon-cancel-music': '&#xe930;',
		'icon-back': '&#xe931;',
		'icon-back2': '&#xe932;',
		'icon-repair-1': '&#xe933;',
		'icon-cloud-backup-up-arrow': '&#xe934;',
		'icon-wifi': '&#xe935;',
		'icon-wifi1': '&#xe936;',
		'icon-lifesaver': '&#xe937;',
		'icon-calendar': '&#xe938;',
		'icon-speech-bubble': '&#xe939;',
		'icon-data-network': '&#xe93a;',
		'icon-computer-fan': '&#xe93b;',
		'icon-software': '&#xe93c;',
		'icon-computer-with-monitor': '&#xe93d;',
		'icon-notebook-and-mouse-cursor': '&#xe93e;',
		'icon-apple': '&#xe93f;',
		'icon-mail-black': '&#xe940;',
		'icon-mouse-scroll': '&#xe941;',
		'icon-shopping-list': '&#xe942;',
		'icon-package': '&#xe943;',
		'icon-reduce': '&#xe944;',
		'icon-smartphone-1': '&#xe945;',
		'icon-optical-drive': '&#xe946;',
		'icon-mouse-1': '&#xe947;',
		'icon-microphone': '&#xe948;',
		'icon-wiping': '&#xe949;',
		'icon-volume': '&#xe94a;',
		'icon-power-button': '&#xe94b;',
		'icon-screen': '&#xe94c;',
		'icon-mail-black-envelope-symbol': '&#xe94d;',
		'icon-plug': '&#xe94e;',
		'icon-payment-method': '&#xe94f;',
		'icon-photo-camera': '&#xe950;',
		'icon-touch': '&#xe951;',
		'icon-battery-status': '&#xe952;',
		'icon-calendar-1': '&#xe953;',
		'icon-checked': '&#xe954;',
		'icon-big-screen': '&#xe955;',
		'icon-calendar-2': '&#xe956;',
		'icon-diagnostic': '&#xe957;',
		'icon-check': '&#xe958;',
		'icon-hdmi': '&#xe959;',
		'icon-settings': '&#xe95a;',
		'icon-keyboard': '&#xe95b;',
		'icon-hdd': '&#xe95c;',
		'icon-fan': '&#xe95d;',
		'icon-hot-tea': '&#xe95e;',
		'icon-delivery-truck': '&#xe95f;',
		'icon-payment': '&#xe960;',
		'icon-placeholder': '&#xe961;',
		'icon-watch': '&#xe962;',
		'icon-monitor': '&#xe963;',
		'icon-tablet': '&#xe964;',
		'icon-smartphone': '&#xe965;',
		'icon-search': '&#xe966;',
		'icon-arrow-triangle': '&#xe967;',
		'icon-whatsapp': '&#xea93;',
		'icon-youtube': '&#xea9d;',
		'icon-snapchat-ghost': '&#xf2ac;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
