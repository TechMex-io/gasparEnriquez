<HTML>
   <HEAD>
      <TITLE>Gasper Enriquez, Gallery</TITLE>
            <script type="text/javascript" src="http://www.gasparenriquez.com/gasparimages/getalbumpics.php?id=site1"></script>
            
            <script type="text/javascript">
            
            //Optional, manual description for particular pictures inside album
            //Syntax: albumid.desc[index]="Picture description here"
            // site1.desc[2]="This is description for the 3rd picture in the album"
            //eg: myvacation.desc[6]="This is description for the 7th picture in the album"
            
            </script>
            
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
   <body bgColor=804000 leftMargin=0 topMargin=0 rightMargin=0 OFFSET="0" MARGINWIDTH="0" MARGINHEIGHT="0">
      
      <TABLE height="120" cellSpacing=0 cellPadding=0 width="1020" border=0>
         <TBODY>
            <TR vAlign=top><a name="start">&nbsp;</a>
               <TD vAlign=top align=middle width="110" bgColor=#804000></td>
               <TD align=left width="900" bgColor=#804000>
                  <IMG height=120 src="images/headergallery.jpg" width=900 border=0>
</TD>
            </TR>
         </TBODY>
      </TABLE>
      <TABLE  cellSpacing=0 cellPadding=0  border=0 width="1020">
         <TBODY>
            <TR>
               <TD vAlign=top width="110" bgColor=#804000>
                  <?php include "includes/leftcolume.php" ?>
               </TD>
               <td background="images/left.jpg" width=5></td>
               <td bgColor=#804000 width=10></td>
               <TD vAlign=top width="900" bgColor=#804000> 
                     <script type="text/javascript">                     
                     new phpimagealbum({
                     	albumvar: site1, //ID of photo album to display (based on getpics.php?id=xxx)
                     	dimensions: [4,3],
                     	sortby: ["file", "asc"], //["file" or "date", "asc" or "desc"]
                     	autodesc: "Photo %i", //Auto add a description beneath each picture? (use keyword %i for image position, %d for image date)
                     	showsourceorder: false, //Show source order of each picture? (helpful during set up stage)
                     	onphotoclick:function(thumbref, thumbindex, thumbfilename){
                     		thumbnailviewer.loadimage(thumbref.src, "fit2screen")
                     	}
                     })
                     
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

