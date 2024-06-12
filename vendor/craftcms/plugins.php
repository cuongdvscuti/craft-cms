<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '4.0.6',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor/blob/master/README.md',
  ),
  'nystudio107/craft-minify' => 
  array (
    'class' => 'nystudio107\\minify\\Minify',
    'basePath' => $vendorDir . '/nystudio107/craft-minify/src',
    'handle' => 'minify',
    'aliases' => 
    array (
      '@nystudio107/minify' => $vendorDir . '/nystudio107/craft-minify/src',
    ),
    'name' => 'Minify',
    'version' => '5.0.0',
    'description' => 'A simple plugin that allows you to minify blocks of HTML, CSS, and JS inline in Craft CMS templates.',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com/',
    'documentationUrl' => 'https://nystudio107.com/docs/minify/',
  ),
  'ether/seo' => 
  array (
    'class' => 'ether\\seo\\Seo',
    'basePath' => $vendorDir . '/ether/seo/src',
    'handle' => 'seo',
    'aliases' => 
    array (
      '@ether/seo' => $vendorDir . '/ether/seo/src',
    ),
    'name' => 'SEO',
    'version' => 'v5.0.0-rc3',
    'description' => 'SEO utilities including a unique field type, sitemap, & redirect manager',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'documentationUrl' => 'https://github.com/ethercreative/seo/blob/v3/README.md',
  ),
  'verbb/super-table' => 
  array (
    'class' => 'verbb\\supertable\\SuperTable',
    'basePath' => $vendorDir . '/verbb/super-table/src',
    'handle' => 'super-table',
    'aliases' => 
    array (
      '@verbb/supertable' => $vendorDir . '/verbb/super-table/src',
    ),
    'name' => 'Super Table',
    'version' => '4.0.0',
    'description' => 'Super-charge your Craft workflow with Super Table. Use it to group fields together or build complex Matrix-in-Matrix solutions.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/super-table',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/super-table/craft-5/CHANGELOG.md',
  ),
  'wrav/oembed' => 
  array (
    'class' => 'wrav\\oembed\\Oembed',
    'basePath' => $vendorDir . '/wrav/oembed/src',
    'handle' => 'oembed',
    'aliases' => 
    array (
      '@wrav/oembed' => $vendorDir . '/wrav/oembed/src',
    ),
    'name' => 'oEmbed',
    'version' => '3.0.8',
    'schemaVersion' => '1.0.1',
    'description' => 'A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.',
    'developer' => 'reganlawton',
    'developerUrl' => 'https://github.com/reganlawton',
    'documentationUrl' => 'https://github.com/wrav/oembed/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/wrav/oembed/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
    'components' => 
    array (
      'oembedService' => 'wrav\\oembed\\services\\OembedService',
    ),
  ),
  'xpertbot/craft-wheelform' => 
  array (
    'class' => 'wheelform\\Plugin',
    'basePath' => $vendorDir . '/xpertbot/craft-wheelform/src',
    'handle' => 'wheelform',
    'aliases' => 
    array (
      '@wheelform' => $vendorDir . '/xpertbot/craft-wheelform/src',
    ),
    'name' => 'Wheel Form',
    'version' => '4.0.0',
    'description' => 'Craft CMS 5 Form administrator with Database integration',
    'developer' => 'Wheel Interactive',
    'developerUrl' => 'https://wheelinteractive.com',
    'documentationUrl' => 'https://github.com/xpertbot/craft-wheelform/blob/master/README.md',
    'changelogUrl' => 'https://github.com/xpertbot/craft-wheelform/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'mailer' => 'Wheelform\\Mailer',
    ),
  ),
);
