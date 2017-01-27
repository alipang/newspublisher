<?php

 /*               DO NOT EDIT THIS FILE

  Edit the file in the MyComponent config directory
  and run ExportObjects

 */



$packageNameLower = 'newspublisher'; /* No spaces, no dashes */

$components = array(
    /* These are used to define the package and set values for placeholders */
    'packageName' => 'NewsPublisher',  /* No spaces, no dashes */
    'packageNameLower' => $packageNameLower,
    'packageDescription' => 'NewsPublisher project for MyComponent extra',
    'version' => '2.1.0',
    'release' => 'pl',
    'author' => 'Bob Ray',
    'email' => '<http://bobsguides.com>',
    'authorUrl' => 'http://bobsguides.com',
    'authorSiteName' => "Bob's Guides",
    'packageDocumentationUrl' => 'http://bobsguides.com/newspublisher-tutorial.html',
    'copyright' => '2013-2017',

    /* no need to edit this except to change format */
    'createdon' => strftime('%m-%d-%Y'),

    'gitHubUsername' => 'BobRay',
    'gitHubRepository' => 'NewsPublisher',

    /* two-letter code of your primary language */
    'primaryLanguage' => 'en',

    /* Set directory and file permissions for project directories */
    'dirPermission' => 0755,  /* No quotes!! */
    'filePermission' => 0644, /* No quotes!! */

    /* Define source and target directories */

    /* path to MyComponent source files */
    'mycomponentRoot' => $this->modx->getOption('mc.root', null,
        MODX_CORE_PATH . 'components/mycomponent/'),

    /* path to new project root */
    'targetRoot' => MODX_ASSETS_PATH . 'mycomponents/' . $packageNameLower . '/',


    /* *********************** NEW SYSTEM SETTINGS ************************ */

    /* If your extra needs new System Settings, set their field values here.
     * You can also create or edit them in the Manager (System -> System Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra */

    'newSystemSettings' => array(

    ),

    /* ************************ NEW SYSTEM EVENTS ************************* */

    /* Array of your new System Events (not default
     * MODX System Events). Listed here so they can be created during
     * install and removed during uninstall.
     *
     * Warning: Do *not* list regular MODX System Events here !!! */

    'newSystemEvents' => array(

    ),

    /* ************************ NAMESPACE(S) ************************* */
    /* (optional) Typically, there's only one namespace which is set
     * to the $packageNameLower value. Paths should end in a slash
    */

    'namespaces' => array(
        'newspublisher' => array(
            'name' => 'newspublisher',
            'path' => '{core_path}components/newspublisher/',
            'assets_path' => '{assets_path}components/newspublisher/',
        ),

    ),

    /* ************************ CONTEXT(S) ************************* */
    /* (optional) List any contexts other than the 'web' context here
    */

    'contexts' => array(
    ),

    /* *********************** CONTEXT SETTINGS ************************ */

    /* If your extra needs Context Settings, set their field values here.
     * You can also create or edit them in the Manager (Edit Context -> Context Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra.
     * The context_key should be the name of an actual context.
     * */

    'contextSettings' => array(

    ),

    /* ************************* CATEGORIES *************************** */
    /* (optional) List of categories. This is only necessary if you
     * need to categories other than the one named for packageName
     * or want to nest categories.
    */

    'categories' => array(
        'NewsPublisher' => array(
            'category' => 'NewsPublisher',
            'parent' => '',  /* top level category */
        ),
    ),

    /* *************************** MENUS ****************************** */

    /* If your extra needs Menus, you can create them here
     * or create them in the Manager, and export them with exportObjects.
     * Be sure to set their namespace to the lowercase package name
     * of your extra.
     *
     * Every menu should have exactly one action */

    'menus' => array(
    ),


    /* ************************* ELEMENTS **************************** */

    /* Array containing elements for your extra. 'category' is required
       for each element, all other fields are optional.
       Property Sets (if any) must come first!

       The standard file names are in this form:
           SnippetName.snippet.php
           PluginName.plugin.php
           ChunkName.chunk.html
           TemplateName.template.html

       If your file names are not standard, add this field:
          'filename' => 'actualFileName',
    */


    'elements' => array(

        'snippets' => array(
            'NewsPublisher' => array(
                'category' => 'NewsPublisher',
                'description' => 'NewsPublisher main snippet',
            ),

            'NpEditThisButton' => array(
                'category' => 'NewsPublisher',
                'description' => 'Snippet to display Edit button for NewsPublisher',
            ),

            'npElFinderConnector' => array(
                'category' => 'NewsPublisher',
                'description' => 'Runs from a tag on the npElFinderConnector resource',
            ),

            'npElFinderContent' => array(
                'category' => 'NewsPublisher',
                'description' => 'Loads the npElFinderContent chunk',
            ),

        ),
        'plugins' => array(
        ),
        'chunks' => array(
            'npBoolTpl' => array(
                'description' => 'Tpl for Yes/No fields in NewsPublisher',
                'category' => 'NewsPublisher',
                'filename' => 'npbooltpl.chunk.tpl',
            ),
            'npDateTpl' => array(
                'description' => 'Tpl for date fields in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'npdatetpl.chunk.tpl',
            ),
            'npErrorTpl' => array(
                'description' => 'Tpl for error messages in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'nperrortpl.chunk.tpl',
            ),
            'npFieldErrorTpl' => array(
                'description' => 'Tpl for field error messages in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'npfielderrortpl.chunk.tpl',
            ),
            'npFileTpl' => array(
                'description' => 'Tpl for file fields in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'npfiletpl.chunk.tpl',
            ),
            'npImageTpl' => array(
                'description' => 'Tpl for image fields in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'npimagetpl.chunk.tpl',
            ),
            'npIntTpl' => array(
                'description' => 'Tpl for integer fields in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'npinttpl.chunk.tpl',
            ),

            'npOuterTpl' => array(
                'description' => 'Outer Tpl NewsPublisher form',
                'category'    => 'NewsPublisher',
                'filename'    => 'npoutertpl.chunk.tpl',
            ),
            'npTabsJsTpl' => array(
                'description' => 'JS for NewsPublisher tabs',
                'category'    => 'NewsPublisher',
                'filename'    => 'nptabsjs.chunk.tpl',
            ),
            'npTabsJsMinTpl' => array(
                'description' => 'Minimized JS for NewsPublisher tabs',
                'category'    => 'NewsPublisher',
                'filename'    => 'nptabsjs.min.chunk.tpl',
            ),
            'npTextAreaTpl' => array(
                'description' => 'Tpl for textarea fields in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'nptextareatpl.chunk.tpl',
            ),
            'npTextTpl' => array(
                'description' => 'Tpl for text input fields in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'nptexttpl.chunk.tpl',
            ),
            'npListOptionTpl' => array(
                'description' => 'Tpl for individual list options in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'nplistoptiontpl.chunk.tpl',
            ),
            'npListOuterTpl' => array(
                'description' => 'Outer Tpl for list options in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'nplistoutertpl.chunk.tpl',
            ),
            'npOptionOuterTpl' => array(
                'description' => 'Outer Tpl for list-options in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'npoptionoutertpl.chunk.tpl',
            ),
            'npOptionTpl' => array(
                'description' => 'Tpl for individual options in NewsPublisher',
                'category'    => 'NewsPublisher',
                'filename'    => 'npoptiontpl.chunk.tpl',
            ),
            'npElFinderContent' => array(
                'description' => 'Loaded by ElFinderContent snippet into npElFinder resource.',
                'category' => 'NewsPublisher',
                'filename' => 'npelfindercontent.chunk.tpl',
            ),

            'npTinymceInitTpl' => array(
                'description' => 'Javascript configuration code for TinyMCE in Newspublisher',
                'category' => 'NewsPublisher',
                'filename' => 'nptinymceinittpl.chunk.tpl',
            ),
        ),

        'templates' => array(
            'npElFinderTemplate' => array(
                'category' => 'NewsPublisher',
                'description' => 'Template for NewsPublisher Connector to launch el Finder',
                'static' => false,
            ),
          /*  'npElFinderTemplate' => array(
                'category' => 'NewsPublisher',
                'description' => 'Template for elFinder window in NewsPublisher',
                'static' => false,
            ),*/
        ),
        'templateVars' => array(
        ),
    ),
    /* (optional) will make all element objects static - 'static' field above will be ignored */
    'allStatic' => false,


    /* ************************* RESOURCES ****************************
     Important: This list only affects Bootstrap. There is another
     list of resources below that controls ExportObjects.
     * ************************************************************** */
    /* Array of Resource pagetitles for your Extra; All other fields optional.
       You can set any resource field here */

    'resources' => array(
        'npElFinder' => array( /* example with other fields */
            'pagetitle' => 'npElFinder',
            'alias' => 'npelfinder',
            'context_key' => 'web',
            'parent' => 'NewsPublisher',
            'template' => 'npElFinderTemplate',
            'richtext' => false,
            'published' => true,
        ),
        'npElFinderConnector' => array(
                'pagetitle' => 'npElFinderConnector',
                'alias' => 'npelfinderconnector',
                'context_key' => 'web',
                'parent' => 'NewsPublisher',
                'template' => 'npElFinderTemplate',
                'richtext' => false,
                'published' => true,

        ),
    ),

    /* Array of languages for which you will have language files,
     *  and comma-separated list of topics
     *  ('.inc.php' will be added as a suffix). */
    'languages' => array(
    ),
    /* ********************************************* */
    /* Define optional directories to create under assets.
     * Add your own as needed.
     * Set to true to create directory.
     * Set to hasAssets = false to skip.
     * Empty js and/or css files will be created.
     */
    'hasAssets' => true,

    'assetsDirs' => array(
        /* If true, a default (empty) CSS file will be created */
        'css' => true,

        /* If true, a default (empty) JS file will be created */
        'js' => true,

        'datepicker' => true,
    ),
    /* minify any JS files */
    'minifyJS' => true,
    /* Create a single JS file from all JS files */
    'createJSMinAll' => true,
    /* if this is false, regular jsmin will be used.
       JSMinPlus is slower but more reliable */
    'useJSMinPlus' => true,

    /* These will automatically go under assets/components/yourcomponent/js/
       Format: directory:filename
       (no trailing slash on directory)
       if 'createCmpFiles is true, these will be ignored.
    */
    'jsFiles' => array(
      /*    'newspublisher.js', */
    ),

    'cssFiles' => array(
         'newspublisher.css'
    ),

    /* ********************************************* */
    /* Define basic directories and files to be created in project*/

    'docs' => array(
        'readme.txt',
        'license.txt',
        'changelog.txt',
        'tutorial.html'
    ),

    /* (optional) Description file for GitHub project home page */
    'readme.md' => true,
    /* assume every package has a core directory */
    'hasCore' => true,

    /* ********************************************* */
    /* (optional) Array of extra script resolver(s) to be run
     * during install. Note that resolvers to connect plugins to events,
     * property sets to elements, resources to templates, and TVs to
     * templates will be created automatically -- *don't* list those here!
     *
     * 'default' creates a default resolver named after the package.
     * (other resolvers may be created above for TVs and plugins).
     * Suffix 'resolver.php' will be added automatically */
    'resolvers' => array(
        'accesspolicy',
        'accesspolicytemplate',
        'filemove',

    ),

    /* (optional) Validators can abort the install after checking
     * conditions. Array of validator names (no
     * prefix of suffix) or '' 'default' creates a default resolver
     *  named after the package suffix 'validator.php' will be added */

    'validators' => array(
    ),

    /* (optional) install.options is needed if you will interact
     * with user during the install.
     * See the user.input.php file for more information.
     * Set this to 'install.options' or ''
     * The file will be created as _build/install.options/user.input.php
     * Don't change the filename or directory name. */
    'install.options' => '',


    /* Suffixes to use for resource and element code files (not implemented)  */
    'suffixes' => array(
        'modPlugin' => '.php',
        'modSnippet' => '.php',
        'modChunk' => '.tpl',
        'modTemplate' => '.html',
        'modResource' => '.html',
    ),


    /* ********************************************* */
    /* (optional) Only necessary if you will have class files.
     *
     * Array of class files to be created.
     *
     * Format is:
     *
     * 'ClassName' => 'directory:filename',
     *
     * or
     *
     *  'ClassName' => 'filename',
     *
     * ('.class.php' will be appended automatically)
     *
     *  Class file will be created as:
     * yourcomponent/core/components/yourcomponent/model/[directory/]{filename}.class.php
     *
     * Set to array() if there are no classes. */
    'classes' => array(
        'NewsPublisher' => 'newspublisher:newspublisher',
    ),

    /* ************************************
     *  These values are for CMPs.
     *  Set any of these to an empty array if you don't need them.
     *  **********************************/

    /* If this is false, the rest of this section will be ignored */

    'createCmpFiles' => false,

    /* IMPORTANT: The array values in the rest of
       this section should be all lowercase */

    /* This is the main action file for your component.
       It will automatically go in core/component/yourcomponent/
    */


    /* *******************************************
     * These settings control exportObjects.php  *
     ******************************************* */
    /* ExportObjects will update existing files. If you set dryRun
       to '1', ExportObjects will report what it would have done
       without changing anything. Note: On some platforms,
       dryRun is *very* slow  */

    'dryRun' => '0',

    /* Array of elements to export. All elements set below will be handled.
     *
     * To export resources, be sure to list pagetitles and/or IDs of parents
     * of desired resources
    */
    'process' => array(

        'snippets',
        'chunks',
        'templates',
        'resources',
    ),
    /*  Array  of resources to process. You can specify specific resources
        or parent (container) resources, or both.

        They can be specified by pagetitle or ID, but you must use the same method
        for all settings and specify it here. Important: use IDs if you have
        duplicate pagetitles */
    'getResourcesById' => false,

    'exportResources' => array(
        'npElFinder',
    ),
    /* Array of resource parent IDs to get children of. */
    'parents' => array(),
    /* Also export the listed parent resources
      (set to false to include just the children) */
    'includeParents' => false,


    /* ******************** LEXICON HELPER SETTINGS ***************** */
    /* These settings are used by LexiconHelper */
    'rewriteCodeFiles' => false,  /* remove ~~descriptions */
    'rewriteLexiconFiles' => false, /* automatically add missing strings to lexicon files */
    /* ******************************************* */

    /* Array of aliases used in code for the properties array.
     * Used by the checkproperties utility to check properties in code against
     * the properties in your properties transport files.
     * if you use something else, add it here (OK to remove ones you never use.
     * Search also checks with '$this->' prefix -- no need to add it here. */
    'scriptPropertiesAliases' => array(
        'props',
        'sp',
        'config',
        'scriptProperties'
    ),
);

return $components;