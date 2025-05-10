/**
 * @author  Im[F(x)]
 */

var _WysiwygMDEditor_BaseAppDir_;

if (typeof(_WysiwygMDEditor_BaseAppDir_) === 'undefined') {

    // console.log('define _WysiwygMDEditor_BaseAppDir_');
    //////////////////////////////////////////////////
    _WysiwygMDEditor_BaseAppDir_ = class {

        //------------------------------------------------
        // Global base app URL
        //------------------------------------------------
        static baseAppDir;

        //------------------------------------------------
        static Initialize() {
            //console.log('_WysiwygMDEditor_BaseAppDir_.Initialize');

            function existsFile(url) {
                var http = new XMLHttpRequest();
                http.open('HEAD', url, false);
                http.send();
                return http.status!=404;
            }

            _WysiwygMDEditor_BaseAppDir_.baseAppDir = '/';
            if (!existsFile(_WysiwygMDEditor_BaseAppDir_.baseAppDir +'plugins/WysiwygMDEditor/Assets/baseappdir.js')) {
                _WysiwygMDEditor_BaseAppDir_.baseAppDir = (location.search === '') ? '/' + location.pathname.split('/')[1] + '/' : location.pathname;
            }
            //console.log(_WysiwygMDEditor_BaseAppDir_.baseAppDir);
        }

        //------------------------------------------------

    } // class _WysiwygMDEditor_BaseAppDir_

    //////////////////////////////////////////////////

} // !defined _WysiwygMDEditor_BaseAppDir_

//////////////////////////////////////////////////
$(function() {
    _WysiwygMDEditor_BaseAppDir_.Initialize();
});

//////////////////////////////////////////////////
