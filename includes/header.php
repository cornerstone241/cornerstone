<div style="position:absolute;"><?php
$current_page = basename($_SERVER['PHP_SELF']);
define('CURRENTPAGE',$current_page);

function isActiveMenu($page_name){
        if(CURRENTPAGE === $page_name){
            echo " class=\"active-menu\"";
        }
    }
?></div>
	<header>
        <div id="header">
            <div class="hdTop">
                <div class="row">
                    <span class="hdEmail">
                        <p>EMAIL US: <a href="mailto:kk@cornerstoneoutsource.com">kk@cornerstoneoutsource.com</a></p>
                    </span>
                    <span class="hdPhone">
                        <p>CALL US: <a href="tel:678-558-1901">678-558-1901</a></p>
                        <ul>
                            <li>
                                <a href="areas-we-serve.php"><span>Areas We Serve</span> <span class="toggle">&#9660;</span></a>
                                <ul>
                                    <li><a href="#">Georgia</a></li>
                                    <li><a href="#">South Carolina</a></li>
                                    <li><a href="#">Tennessee</a></li>
                                </ul>
                            </li>
                        </ul>
                    </span> 
                </div>
            </div>
        </div>  
    </header>