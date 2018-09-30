<HTML>
   <HEAD>
      <TITLE>Gaspar Enriquez, Intro </TITLE>
      <META content="Chicano, art, Muralism, Gaspar Enriquez, Murals, el paso, juarez, hyperrealism, Chicano Visions, artist, air-brush">
            <SCRIPT type=text/javascript>
            	/***********************************************
            	* 
            	* 
            	* 
            	***********************************************/
            	 
                    var stores=new Array()
            
                    //SET IMAGE PATHS. Extend or contract array as needed
            
                    stores[0]=["images/p1.jpg", "", ""] //  
                    stores[1]=["images/p2.jpg", "", ""] // 
                    stores[2]=["images/p3.jpg", "", ""] // 
                    stores[3]=["images/p4.jpg", "", ""] // 
            
            	var fadebgcolor="#804000"		 
            	////NO need to edit beyond here/////////////
            	 
            	var fadearray=new Array() //array to cache fadeshow instances
            	var fadeclear=new Array() //array to cache corresponding clearinterval pointers
            	 
            	var dom=(document.getElementById) //modern dom browsers
            	var iebrowser=document.all
            	 
            	function fadeshow(theimages, fadewidth, fadeheight, borderwidth, delay, pause, displayorder){
            	this.pausecheck=pause
            	this.mouseovercheck=0
            	this.delay=delay
            	this.degree=10 //initial opacity degree (10%)
            	this.curimageindex=0
            	this.nextimageindex=1
            	fadearray[fadearray.length]=this
            	this.slideshowid=fadearray.length-1
            	this.canvasbase="canvas"+this.slideshowid
            	this.curcanvas=this.canvasbase+"_0"
            	if (typeof displayorder!="undefined")
            	theimages.sort(function() {return Math.random()/2 - Math.random()*2;}) //thanks to Mike (aka Mwinter) :)
            	this.theimages=theimages
            	this.imageborder=parseInt(borderwidth)
            	this.postimages=new Array() //preload images
            	for (p=0;p<theimages.length;p++){
            	this.postimages[p]=new Image()
            	this.postimages[p].src=theimages[p][0]
            	}
            	 
            	var fadewidth=fadewidth+this.imageborder*2
            	var fadeheight=fadeheight+this.imageborder*2
            	 
            	if (iebrowser&&dom||dom) //if IE5+ or modern browsers (ie: Firefox)
            	document.write('<div id="master'+this.slideshowid+'" style="position:relative;width:'+fadewidth+'px;height:'+fadeheight+'px;overflow:hidden;"><div id="'+this.canvasbase+'_0" style="position:absolute;width:'+fadewidth+'px;height:'+fadeheight+'px;top:0;left:0;filter:progid:DXImageTransform.Microsoft.alpha(opacity=10);-moz-opacity:10;-khtml-opacity:10;background-color:'+fadebgcolor+'"></div><div id="'+this.canvasbase+'_1" style="position:absolute;width:'+fadewidth+'px;height:'+fadeheight+'px;top:0;left:0;filter:progid:DXImageTransform.Microsoft.alpha(opacity=10);-moz-opacity:10;background-color:'+fadebgcolor+'"></div></div>')
            	else
            	document.write('<div><img name="defaultslide'+this.slideshowid+'" src="'+this.postimages[0].src+'"></div>')
            	 
            	if (iebrowser&&dom||dom) //if IE5+ or modern browsers such as Firefox
            	this.startit()
            	else{
            	this.curimageindex++
            	setInterval("fadearray["+this.slideshowid+"].rotateimage()", this.delay)
            	}
            	}
            	
            	function fadepic(obj){
            	if (obj.degree<100){
            	obj.degree+=10
            	if (obj.tempobj.filters&&obj.tempobj.filters[0]){
            	if (typeof obj.tempobj.filters[0].opacity=="number") //if IE6+
            	obj.tempobj.filters[0].opacity=obj.degree
            	else //else if IE5.5-
            	obj.tempobj.style.filter="alpha(opacity="+obj.degree+")"
            	}
            	else if (obj.tempobj.style.MozOpacity)
            	obj.tempobj.style.MozOpacity=obj.degree/101
            	else if (obj.tempobj.style.KhtmlOpacity)
            	obj.tempobj.style.KhtmlOpacity=obj.degree/100
            	}
            	else{
            	clearInterval(fadeclear[obj.slideshowid])
            	obj.nextcanvas=(obj.curcanvas==obj.canvasbase+"_0")? obj.canvasbase+"_0" : obj.canvasbase+"_1"
            	obj.tempobj=iebrowser? iebrowser[obj.nextcanvas] : document.getElementById(obj.nextcanvas)
            	obj.populateslide(obj.tempobj, obj.nextimageindex)
            	obj.nextimageindex=(obj.nextimageindex<obj.postimages.length-1)? obj.nextimageindex+1 : 0
            	setTimeout("fadearray["+obj.slideshowid+"].rotateimage()", obj.delay)
            	}
            	}
            	 
            	fadeshow.prototype.populateslide=function(picobj, picindex){
            	var slideHTML=""
            	if (this.theimages[picindex][1]!="") //if associated link exists for image
            	slideHTML='<a href="'+this.theimages[picindex][1]+'" target="'+this.theimages[picindex][2]+'">'
            	slideHTML+='<img src="'+this.postimages[picindex].src+'" border="'+this.imageborder+'px">'
            	if (this.theimages[picindex][1]!="") //if associated link exists for image
            	slideHTML+='</a>'
            	picobj.innerHTML=slideHTML
            	}
            	 
            	 
            	fadeshow.prototype.rotateimage=function(){
            	if (this.pausecheck==1) //if pause onMouseover enabled, cache object
            	var cacheobj=this
            	if (this.mouseovercheck==1)
            	setTimeout(function(){cacheobj.rotateimage()}, 100)
            	else if (iebrowser&&dom||dom){
            	this.resetit()
            	var crossobj=this.tempobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
            	crossobj.style.zIndex++
            	fadeclear[this.slideshowid]=setInterval("fadepic(fadearray["+this.slideshowid+"])",50)
            	this.curcanvas=(this.curcanvas==this.canvasbase+"_0")? this.canvasbase+"_1" : this.canvasbase+"_0"
            	}
            	else{
            	var ns4imgobj=document.images['defaultslide'+this.slideshowid]
            	ns4imgobj.src=this.postimages[this.curimageindex].src
            	}
            	this.curimageindex=(this.curimageindex<this.postimages.length-1)? this.curimageindex+1 : 0
            	}
            	 
            	fadeshow.prototype.resetit=function(){
            	this.degree=10
            	var crossobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
            	if (crossobj.filters&&crossobj.filters[0]){
            	if (typeof crossobj.filters[0].opacity=="number") //if IE6+
            	crossobj.filters(0).opacity=this.degree
            	else //else if IE5.5-
            	crossobj.style.filter="alpha(opacity="+this.degree+")"
            	}
            	else if (crossobj.style.MozOpacity)
            	crossobj.style.MozOpacity=this.degree/101
            	else if (crossobj.style.KhtmlOpacity)
            	crossobj.style.KhtmlOpacity=obj.degree/100
            	}
            	 
            	 
            	fadeshow.prototype.startit=function(){
            	var crossobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
            	this.populateslide(crossobj, this.curimageindex)
            	if (this.pausecheck==1){ //IF SLIDESHOW SHOULD PAUSE ONMOUSEOVER
            	var cacheobj=this
            	var crossobjcontainer=iebrowser? iebrowser["master"+this.slideshowid] : document.getElementById("master"+this.slideshowid)
            	crossobjcontainer.onmouseover=function(){cacheobj.mouseovercheck=1}
            	crossobjcontainer.onmouseout=function(){cacheobj.mouseovercheck=0}
            	}
            	this.rotateimage()
            	}		 
            </SCRIPT>
            
            <script type="text/javascript" src="ddphpalbum.js">
            
            /***********************************************
            * PHP Photo Album script v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
            * This notice MUST stay intact for legal use
            * Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
            ***********************************************/
            
            </script> 

            <style>
      	      <!--
      	      A.type1:link    {color:#000000; text-decoration:underline;}
      	      A.type1:visited {color:#000000; text-decoration:underline;}
      	      A.type1:active  {color:#000000; text-decoration:underline;}
      	      A.type1:hover   {color:#ffff00; text-decoration:overline underline;}
      		
      	      A.type2:link    {color:#BFC0C2; }
      	      A.type2:visited {color:#BFC0C2; }
      	      A.type2:active  {color:#BFC0C2; }
      	      A.type2:hover   {color:#1D1DFF; }
      		
      	      A.type3:link    {color:#0000FF; text-decoration:underline;}
      	      A.type3:visited {color:#0000FF; text-decoration:underline;}
      	      A.type3:active  {color:#0000FF; text-decoration:underline;}
      	      A.type3:hover   {color:#47675B; text-decoration:overline underline;}
      	      // ?>
      	   </style>

            <link rel="stylesheet" type="text/css" href="ddphpalbum.css" />
   </HEAD>
   <body bgColor=804000 leftMargin=0 topMargin=0 rightMargin=0 OFFSET="0" MARGINWIDTH="0" MARGINHEIGHT="0" >

      
      <TABLE height="120" cellSpacing=0 cellPadding=0 width="1020" border=0>
         <TBODY>
            <TR vAlign=top><a name="start">&nbsp;</a>
                  <TD vAlign=top align=middle width="110" bgColor=#804000><td>
                  <TD align=left width="483" bgColor=#804000>
                     <IMG height=120 src="images/headerblank.jpg" width=900 border=0>
                  </TD>
            </TR>
         </TBODY>
      </TABLE>
      <TABLE  cellSpacing=0 cellPadding=0  border=0>
         <TBODY>
            <TR>
               <TD vAlign=top width="110" bgColor=#804000>
                  <?php include "includes/leftcolume.php" ?>
               </TD>
               <td background="images/left.jpg" width=5></td>
               <td bgColor=#804000 width=10></td>
               <TD vAlign=top width="900" bgColor=#804000>
			                                 <script type="text/javascript">
                                              //new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
                                             new fadeshow(stores, 800, 600, 1, 4000, 1)										 
                     			  	         </script>
                 

					</TD>
            </TR>
         </TBODY>
      </TABLE>
      <HR>
      <p align="center">www.GasparEnriquez.com | San Elizario, TX |  
      </p><p align="center" class="footer"><font size=-1>Copyright 2010 Gaspar Enriquez - All Rights
        Reserved - Website Design by    AmrElPaso.com
   </BODY>
</HTML>

