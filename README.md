PressBooks for MobiApp121 Publishing
==========

This is [MobiApp121 Publishing's](http://mobiapp121.com/publishing/) development version of [PressBooks](http://pressbooks.com), a book content management system which exports in multiple formats: ebooks, webbooks, print-ready [PDF][], and various XML flavours. <strong>Please Note</strong> this is based an a now very old version of Wordpress (3.6) and the PressBooks plugin (3.0.3), but we've refined it for extremely stable and reliable standard eBook output. We do however, strongly recommend you look at the current PressBooks plugin first.

[MobiApp121 Publishing](http://mobiapp121.com/publishing/) has developed this version of PressBooks to provide a free and non-commercial service to existing authors and publisher clients only. There are some small changes which include a Drop Caps plugin of our own design for any template, Apple iBook xml for iBook, refined footnotes, Latex, tables and TinyMCE Visual Editor extended functionality. We refine the books further commercially in-house, using a combination of InDesign, Adobe Acrobat, Jutoh and Sigil for ePub 3, Fixed-Layout, Daisy, Audiobook and Print professional submission.

Other differences include using our own and quite complex front end theme instead of Publisher One, that incoprates a lot of other software to compliment the book platform and some Wordpres custom admin labelling to avoid confusion.

We are currently working on a new version through a local development platform. The changes will be reflected here when we reach a first stable release.

[PressBooks](http://pressbooks.com) is built on top of WordPress Multi-Site, and makes significant changes to:
  * admin interface (customized for books and other structured documents, such as magazines, journals, reports etc.)
  * web presentation layer (again, customized for books and structured documents); and 
  * export routines. 

PressBooks is free software, released under the GPL v.2.0 license. 

Their web/ebook and [PDF][] exports are all driven by HTML+CSS. XML outputs have no styling.

  [PDF]: http://pressbooks.com/prince        "Note: they use the non-free software Prince XML for PDF export."
  
Mobiapp121 uses the watermarked free version of Prince for internal Pre-Press checking only we then produce the final proof for print via the methods outlined above. There is [mPDF for PressBooks](https://github.com/pressbooks/pressbooks-mpdf) as a free opensource alternative. We find it doesn't parse CSS/fonts very well, though it is the current best alternative. We recommend to use Prince as outlined or you can obtain a [commercial licence](https://www.princexml.com/).


Important!
----------

 * Do ___NOT___ use PressBooks with an existing WordPress site. 
 * Please use with a ___FRESH___ install of WP ___MULTISITE___.
 * If this makes you nervous, please use the free site: [PressBooks](http://pressbooks.com), or contact us.
 * Please consult the readme.txt for important custom installation changes to PressBooks.
 * This configuration is designed specifically to work in conjunction with several tested plugins:
 1 [WP-Quicklatex](https://en-gb.wordpress.org/plugins/wp-quicklatex/) + WP Super Cache, important for Latex.
 2 [MCE Table Buttons](https://wordpress.org/plugins/mce-table-buttons/), for tables.
 3 [Tiny MCE Spellcheck](https://wordpress.org/plugins/tinymce-spellcheck/), for inline proofing.
 4 [Disable All WP Updates](https://wordpress.org/plugins/disable-wordpress-updates/) security and nag prevention.
 5 Install reliable Malware/Firewall/Virus protection, especially with this older install.


Try pressbooks.com
------------------

While PressBooks for MobiApp121 Publishing is open source, we recommend you try [PressBooks.com](http://pressbooks.com) before deciding whether or not you wish to host and maintain your own instance. We can also host and maintain an instance for you. 

Installing the Plugin
---------------------

PressBooks is not for use on an existing blog. Instead it should be used with a fresh, multi-site WordPress install.

Requirements
------------

This version works with PHP 5.6.X and WordPress 3.6, non other are supported.

Disclaimers
-----------

The PressBooks/MobiApp121 plugin is supplied "as is" and all use is at your own risk.

More Details
------------

See readme.txt for specific installation details, relevant to this version. If you would like to hire us to install a platform for you, please [email us](mailto:info@mobiapp121.com)
