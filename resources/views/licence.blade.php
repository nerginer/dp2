@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Licenses</h2></div>
                 
                <div class="panel-body">
                  <div class="form-group">
    
    <div class="project-licenses-container" data-bind="visible: Licenses().length > 0, foreach: Licenses">
        <div class="project-license clear" data-bind="css: { clear: $index() % 3 == 0 }">
              
           
            
            <!-- Title -->
            <div class="license-title">
                <h3 data-bind="text: Title">Attribution / CC BY</h3>
            </div>
            
            <!-- Description -->
            <div class="license-description" data-bind="text: Description">This license lets others distribute, remix, tweak, and build upon your work, even commercially, as long as they credit you for the original creation. This is the most accommodating of licenses offered. Recommended for maximum dissemination and use of licensed materials.</div>
            
            <!-- License Links -->
            <div class="license-links">


                <a href="http://creativecommons.org/licenses/by/4.0/" target="_blank" data-bind="text: LicenseInfoUrlText, attr: { href: LicenseInfoUrl }">http://creativecommons.org/licenses/by/4.0/</a>
                <br>
                

                <a href="http://creativecommons.org/licenses/by/4.0/legalcode" target="_blank" data-bind="text: LegalCodeUrlText, attr: { href: LegalCodeUrl }">http://creativecommons.org/licenses/by/4.0/legalcode</a>
            </div>
        </div>
    
        <div class="project-license" data-bind="css: { clear: $index() % 3 == 0 }">
              
           
            
            <!-- Title -->
            <div class="license-title">
                <h3 data-bind="text: Title">Attribution-ShareAlike / CC BY-SA</h3>
            </div>
            
            <!-- Description -->
            <div class="license-description" data-bind="text: Description">This license lets others remix, tweak, and build upon your work even for commercial purposes, as long as they credit you and license their new creations under the identical terms. This license is often compared to “copyleft” free and open source software licenses. All new works based on yours will carry the same license, so any derivatives will also allow commercial use. This is the license used by Wikipedia, and is recommended for materials that would benefit from incorporating content from Wikipedia and similarly licensed projects.</div>
            
            <!-- License Links -->
            <div class="license-links">


                <a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank" data-bind="text: LicenseInfoUrlText, attr: { href: LicenseInfoUrl }">http://creativecommons.org/licenses/by-sa/4.0/</a>
                <br>
                

                <a href="http://creativecommons.org/licenses/by-sa/4.0/legalcode" target="_blank" data-bind="text: LegalCodeUrlText, attr: { href: LegalCodeUrl }">http://creativecommons.org/licenses/by-sa/4.0/legalcode</a>
            </div>
        </div>
    
        <div class="project-license" data-bind="css: { clear: $index() % 3 == 0 }">
            
           
            
            <!-- Title -->
            <div class="license-title">
                <h3 data-bind="text: Title">Attribution-NoDerivs / CC BY-ND</h3>
            </div>
            
            <!-- Description -->
            <div class="license-description" data-bind="text: Description">This license allows for redistribution, commercial and non-commercial, as long as it is passed along unchanged and in whole, with credit to you.</div>
            
            <!-- License Links -->
            <div class="license-links">


                <a href="http://creativecommons.org/licenses/by-nd/4.0/" target="_blank" data-bind="text: LicenseInfoUrlText, attr: { href: LicenseInfoUrl }">http://creativecommons.org/licenses/by-nd/4.0/</a>
                <br>
                

                <a href="http://creativecommons.org/licenses/by-nd/4.0/legalcode" target="_blank" data-bind="text: LegalCodeUrlText, attr: { href: LegalCodeUrl }">http://creativecommons.org/licenses/by-nd/4.0/legalcode</a>
            </div>
        </div>
    
        <div class="project-license clear" data-bind="css: { clear: $index() % 3 == 0 }">
             
         
            
            <!-- Title -->
            <div class="license-title">
                <h3 data-bind="text: Title">Attribution-NonCommercial / CC BY-NC</h3>
            </div>
            
            <!-- Description -->
            <div class="license-description" data-bind="text: Description">This license lets others remix, tweak, and build upon your work non-commercially, and although their new works must also acknowledge you and be non-commercial, they don’t have to license their derivative works on the same terms.</div>
            
            <!-- License Links -->
            <div class="license-links">


                <a href="http://creativecommons.org/licenses/by-nc/4.0/" target="_blank" data-bind="text: LicenseInfoUrlText, attr: { href: LicenseInfoUrl }">http://creativecommons.org/licenses/by-nc/4.0/</a>
                <br>
                

                <a href="http://creativecommons.org/licenses/by-nc/4.0/legalcode" target="_blank" data-bind="text: LegalCodeUrlText, attr: { href: LegalCodeUrl }">http://creativecommons.org/licenses/by-nc/4.0/legalcode</a>
            </div>
        </div>
    
        <div class="project-license" data-bind="css: { clear: $index() % 3 == 0 }">
             
          
            
            <!-- Title -->
            <div class="license-title">
                <h3 data-bind="text: Title">Attribution-NonCommercial-ShareAlike / CC BY-NC-SA</h3>
            </div>
            
            <!-- Description -->
            <div class="license-description" data-bind="text: Description">This license lets others remix, tweak, and build upon your work non-commercially, as long as they credit you and license their new creations under the identical terms.</div>
            
            <!-- License Links -->
            <div class="license-links">


                <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank" data-bind="text: LicenseInfoUrlText, attr: { href: LicenseInfoUrl }">http://creativecommons.org/licenses/by-nc-sa/4.0/</a>
                <br>
                

                <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/legalcode" target="_blank" data-bind="text: LegalCodeUrlText, attr: { href: LegalCodeUrl }">http://creativecommons.org/licenses/by-nc-sa/4.0/legalcode</a>
            </div>
        </div>
    
        <div class="project-license" data-bind="css: { clear: $index() % 3 == 0 }">
             
          
            
            <!-- Title -->
            <div class="license-title">
                <h3 data-bind="text: Title">Attribution-NonCommercial-NoDerivs / CC BY-NC-ND</h3>
            </div>
            
            <!-- Description -->
            <div class="license-description" data-bind="text: Description">This license is the most restrictive of our six main licenses, only allowing others to download your works and share them with others as long as they credit you, but they can’t change them in any way or use them commercially.</div>
            
            <!-- License Links -->
            <div class="license-links">


                <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank" data-bind="text: LicenseInfoUrlText, attr: { href: LicenseInfoUrl }">http://creativecommons.org/licenses/by-nc-nd/4.0/</a>
                <br>
                

                <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/legalcode" target="_blank" data-bind="text: LegalCodeUrlText, attr: { href: LegalCodeUrl }">http://creativecommons.org/licenses/by-nc-nd/4.0/legalcode</a>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








