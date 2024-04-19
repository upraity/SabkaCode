<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: https://dj.000.pe/login.php");
        exit;
    }

?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="dbrau_admit_card_files/filelist.xml">
<link rel=Preview href="dbrau_admit_card_files/preview.wmf">
<link rel=Edit-Time-Data href="dbrau_admit_card_files/editdata.mso">
<title>dbrau_admit_card</title>
<link rel=themeData href="dbrau_admit_card_files/themedata.thmx">
<link rel=colorSchemeMapping
href="dbrau_admit_card_files/colorschememapping.xml">
<style>
.
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1040178053 9 0 511 0;}
@font-face
	{font-family:"Nirmala UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-2130739165 33554506 512 0 1 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-fareast-language:EN-US;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:15.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-fareast-language:EN-US;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-fareast-language:EN-US;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-fareast-language:EN-US;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;
	mso-ligatures:standardcontextual;
	mso-fareast-language:EN-US;}
p.msonormal0, li.msonormal0, div.msonormal0
	{mso-style-name:msonormal;
	mso-style-unhide:no;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:0pt;
	mso-ligatures:none;
	mso-fareast-language:EN-US;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}

-->
div.WordSection1
	{//page:WordSection1;
    font-size:50px;
    width:210mm;
    height:285mm;}
</style>
</head>
<body lang=EN-IN style='tab-interval:36.0pt;word-wrap:break-word'>
<a tittle="printscreen" alt="printscreen" onclick="window.print()"; target="_blank"; style="cursor:pointer";>
<div class=WordSection1 style="width:210mm; height:285mm;">
<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 align=left
 width=1389 style='width:1041.45pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;
 margin-right:6.75pt;mso-table-bspace:8.0pt;margin-bottom:5.75pt;mso-table-anchor-vertical:
 margin;mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:
 -42.0pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.95pt;mso-row-margin-right:
  517.25pt'>
  <td width=151 nowrap colspan=2 rowspan=5 valign=bottom style='width:4.0cm;
  border-top:solid windowtext 1.0pt;border-left:solid windowtext 1.0pt;
  border-bottom:solid black 1.0pt;border-right:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span style='mso-ignore:vglayout'>
   <table cellpadding=0 cellspacing=0>
    <tr>
     <td width=4 height=0></td>
    </tr>
    <tr>
     <td></td>
     <td><img width=108 height=111 src="https://th.bing.com/th?id=OIP.qzT1B9ialXDncaWb4vXm6AAAAA&w=252&h=247&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
     v:shapes="Picture_x0020_10"></td>
    </tr>
   </table>
   </span><br
  style='mso-ignore:vglayout' clear=ALL>
  <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'><o:p></o:p></span></p>
  </td>
  <td width=434 nowrap colspan=3 style='width:325.75pt;border:none;border-top:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='font-size:12.0pt;mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:24px;mso-fareast-language:EN-IN'>DR. BHIMRAO AMBEDKAR UNIVERSITY, AGRA<o:p></o:p></span></b></p>
  </td>
  <td width=113 nowrap rowspan=4 valign=bottom style='width:3.0cm;border-top:
  solid windowtext 1.0pt;border-left:none;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span style='mso-ignore:vglayout'>
   <table cellpadding=0 cellspacing=0>
    <tr>
     <td width=179 height=20></td>
    </tr>
    <tr>
     <td style="margin-top:5px;"><img width=107 height=91 src="https://htmlify.amanbabuhemant.repl.co/dj/A.jpg"
     v:shapes="Picture_x0020_9"></td>
    </tr>
   </table>
   </span><br
  style='mso-ignore:vglayout' clear=ALL>
  <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'><o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.95pt;mso-row-margin-right:517.25pt'>
  <td width=434 nowrap colspan=3 style='width:325.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.95pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='font-size:12.0pt;mso-ascii-font-family:
  Calibri;mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:19;mso-fareast-language:EN-IN'>Examination 2023-24<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:2;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=434 nowrap colspan=3 style='width:325.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:19;mso-fareast-language:EN-IN'><span
  style='mso-spacerun:yes'> </span>PROVISONAL ADMIT CARD<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:3;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=434 nowrap colspan=3 style='width:325.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:19;mso-fareast-language:EN-IN'>BA-I-Sem, Dec 2023<o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:4;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:19;mso-fareast-language:EN-IN'><span
  style='mso-spacerun:yes'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HELD IN: Apr 2023<span
  class=GramE></span><o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:15px;mso-fareast-language:EN-IN'><span
  style='mso-spacerun:yes'></span><span
  style='mso-spacerun:yes'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category: REGULAR EXAM<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:5;height:17.85pt;mso-row-margin-right:517.25pt'>
  <td width=151 nowrap colspan=2 style='width:4.0cm;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  black;mso-border-left-alt:windowtext;mso-border-bottom-alt:windowtext;
  mso-border-right-alt:black;mso-border-style-alt:solid;mso-border-width-alt:
  .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>College
  Name<o:p></o:p></span></p>
  </td>
  <td width=434 nowrap colspan=3 style='width:325.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["clg"]; ?><o:p></o:p></span></b></p>
  </td>
  <td width=113 nowrap rowspan=7 valign=bottom style='width:3.0cm;border-top:
  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span style='mso-ignore:vglayout'>
   <table cellpadding=0 cellspacing=0>
    <tr>
     <td width=13 height=10></td>
    </tr>
    <tr>
     <td></td><td></td>
     <td><img width=130 height=86 src="https://th.bing.com/th/id/OIP.ndapGeUyZ0m5iDxNQOLkBgHaHa?w=202&h=202&c=7&r=0&o=5&dpr=1.3&pid=1.7"
     v:shapes="Picture_x0020_7"></td>
    </tr>
   </table>
   </span><br
  style='mso-ignore:vglayout' clear=ALL>
  <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span style='mso-ignore:vglayout'>
   <table cellpadding=0 cellspacing=0>
    <tr>
     <td width="26" height=0></td>
    </tr>
    <tr>
     <td width="10"></td>
     <td><img width=100 height=70 src="https://htmlify.amanbabuhemant.repl.co/dj/qrcode.jpg"
     v:shapes="Picture_x0020_8"></td>
    </tr>
   </table>
   </span><br
  style='mso-ignore:vglayout' clear=ALL>
  <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'><o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:6;height:17.25pt;mso-row-margin-right:517.25pt'>
  <td width=151 nowrap colspan=2 style='width:4.0cm;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>Examination
  Centre<o:p></o:p></span></p>
  </td>
  <td width=434 nowrap colspan=3 style='width:325.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["examcenter"]; ?><o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:7;height:17.85pt;mso-row-margin-right:517.25pt'>
  <td width=151 nowrap colspan=2 style='width:4.0cm;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>Student's
  Name<o:p></o:p></span></p>
  </td>
  <td width=151 nowrap style='width:113.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["name"]; ?><o:p></o:p></span></b></p>
  </td>
  <td width=123 nowrap style='width:92.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:17.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>WRN No.<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["wrn"]; ?><o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:8;height:16.7pt;mso-row-margin-right:517.25pt'>
  <td width=151 nowrap colspan=2 style='width:4.0cm;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.7pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>Father's
  Name<o:p></o:p></span></p>
  </td>
  <td width=151 nowrap style='width:113.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["fname"]; ?><o:p></o:p></span></b></p>
  </td>
  <td width=123 nowrap style='width:92.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:16.7pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;font-size:18;mso-ligatures:none;mso-fareast-language:EN-IN'>Roll No.<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;mso-fareast-language:EN-IN'><?php echo"". $_GET["rollno"]; ?><o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:9;height:17.25pt;mso-row-margin-right:517.25pt'>
  <td width=151 nowrap colspan=2 style='width:4.0cm;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>Mother's
  Name<o:p></o:p></span></p>
  </td>
  <td width=151 nowrap style='width:113.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["mname"]; ?><o:p></o:p></span></b></p>
  </td>
  <td width=123 nowrap style='width:92.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;font-size:18;mso-ligatures:none;mso-fareast-language:EN-IN'>Enrolment
  No.<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["wrn"]; ?><o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:10;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=151 nowrap colspan=2 style='width:4.0cm;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>Gender<o:p></o:p></span></p>
  </td>
  <td width=151 nowrap style='width:113.1pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><?php echo"". $_GET["gender"]; ?><o:p></o:p></span></b></p>
  </td>
  <td width=123 nowrap style='width:92.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>Form No.<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;mso-fareast-language:EN-IN'>&nbsp;<o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:11;height:20.15pt;mso-row-margin-right:517.25pt'>
  <td width=586 nowrap colspan=5 style='width:439.15pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.15pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>Paper Code and Name<o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:12;height:20.85pt;mso-row-margin-right:517.25pt'>
  <td width=57 nowrap style='width:42.85pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:20.85pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span class=SpellE><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:18;mso-fareast-language:EN-IN'>S.No</span></b></span><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'>.<o:p></o:p></span></b></p>
  </td>
  <td width=94 nowrap style='width:70.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:18;mso-fareast-language:EN-IN'>Code<o:p></o:p></span></b></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:18;mso-fareast-language:EN-IN'>Name<o:p></o:p></span></b></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:18;mso-fareast-language:EN-IN'>Date<o:p></o:p></span></b></p>
  </td>
  <td width=113 nowrap style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.85pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><b><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:18;mso-fareast-language:EN-IN'>Time<o:p></o:p></span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:13;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=57 nowrap style='width:42.85pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>1<o:p></o:p></span></b></p>
  </td>
  <td width=94 nowrap style='width:70.55pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>501211<o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border:none;border-right:
  solid black 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>sub1<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>#########<o:p></o:p></span></p>
  </td>
  <td width=113 nowrap style='width:3.0cm;border:none;border-right:solid black 1.0pt;
  mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:
  13.8pt'>
  <p class=MsoNormal align=left style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>7:00 <span class=GramE>TO<span
  style='mso-spacerun:yes'>  </span>10:00</span> AM<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:14;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=57 nowrap style='width:42.85pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>2<o:p></o:p></span></b></p>
  </td>
  <td width=94 nowrap style='width:70.55pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>501212<o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border:none;border-right:
  solid black 1.0pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>sub2<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>#########<o:p></o:p></span></p>
  </td>
  <td width=113 nowrap style='width:3.0cm;border:none;border-right:solid black 1.0pt;
  mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:
  13.8pt'>
  <p class=MsoNormal align=left style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>7:00 <span class=GramE>TO<span
  style='mso-spacerun:yes'>  </span>10:00</span> AM<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:15;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=57 nowrap style='width:42.85pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>3<o:p></o:p></span></b></p>
  </td>
  <td width=94 nowrap style='width:70.55pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>501213<o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border:none;border-right:
  solid black 1.0pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>sub3<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>#########<o:p></o:p></span></p>
  </td>
  <td width=113 nowrap style='width:3.0cm;border:none;border-right:solid black 1.0pt;
  mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:
  13.8pt'>
  <p class=MsoNormal align=left style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>7:00 <span class=GramE>TO<span
  style='mso-spacerun:yes'>  </span>10:00</span> AM<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:16;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=57 nowrap style='width:42.85pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>4<o:p></o:p></span></b></p>
  </td>
  <td width=94 nowrap style='width:70.55pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>501214<o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border:none;border-right:
  solid black 1.0pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>sub4<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>#########<o:p></o:p></span></p>
  </td>
  <td width=113 nowrap style='width:3.0cm;border:none;border-right:solid black 1.0pt;
  mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:
  13.8pt'>
  <p class=MsoNormal align=left style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>7:00 <span class=GramE>TO<span
  style='mso-spacerun:yes'>  </span>10:00</span> AM<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:17;height:13.8pt;mso-row-margin-right:517.25pt'>
  <td width=57 nowrap style='width:42.85pt;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>5<o:p></o:p></span></b></p>
  </td>
  <td width=94 nowrap style='width:70.55pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>501215<o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border:none;border-right:
  solid black 1.0pt;mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>sub5<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>#########<o:p></o:p></span></p>
  </td>
  <td width=113 nowrap style='width:3.0cm;border:none;border-right:solid black 1.0pt;
  mso-border-right-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:
  13.8pt'>
  <p class=MsoNormal align=left style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>7:00 <span class=GramE>TO<span
  style='mso-spacerun:yes'>  </span>10:00</span> AM<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:18;height:3.0pt;mso-row-margin-right:517.25pt'>
  <td width=57 nowrap style='width:42.85pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>6<o:p></o:p></span></b></p>
  </td>
  <td width=94 nowrap style='width:70.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 style='width:205.3pt;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;font-size:17;mso-fareast-language:EN-IN'>Practical
  Based on Above Paper<o:p></o:p></span></p>
  </td>
  <td width=161 nowrap style='width:120.45pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:3.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=113 nowrap style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;mso-fareast-language:EN-IN'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=690><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:19;height:13.8pt'>
  <td colspan=4 rowspan=2 style='border:none;border-left:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'></td>
  <td width=274 colspan=2 rowspan=2 style='width:205.5pt;border:none;
  border-right:solid black 1.0pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;mso-element:frame;mso-element-frame-hspace:
  9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:margin;
  mso-element-top:-42.0pt;mso-height-rule:exactly'><span style='mso-ignore:vglayout'>
   <table cellpadding=0 cellspacing=0>
    <tr>
     <td width=170 height=20></td>
    </tr>
    <tr>
     <td></td>
     <td><img width=87 height=73 src="https://htmlify.amanbabuhemant.repl.co/dj/sign.jpg"
     v:shapes="Picture_x0020_1"></td>
    </tr>
   </table>
   </span><br
  style='mso-ignore:vglayout' clear=ALL>
  <span style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'><o:p></o:p></span></p>
  </td>
  <td width=690 nowrap valign=bottom style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:20;height:27.25pt'>
  <td width=690 nowrap valign=bottom style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:27.25pt'></td>
 </tr>
 <tr style='mso-yfti-irow:21;height:13.8pt'>
  <td width=151 nowrap colspan=2 rowspan=2 style='width:4.0cm;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid black 1.0pt;
  border-right:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'>Signature of Candidate<o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 rowspan=2 style='width:205.3pt;border:none;
  border-bottom:solid black 1.0pt;mso-border-bottom-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>        
  </span><span style='mso-spacerun:yes'>  </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature of Principal of
  Inst./College <o:p></o:p></span></p>
  </td>
  <td width=274 nowrap colspan=2 rowspan=2 style='width:205.5pt;border-top:
  none;border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-bottom-alt:solid black .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;text-align:center;
  line-height:normal;mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-horizontal:margin;mso-element-top:
  -42.0pt;mso-height-rule:exactly'><span style='mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;font-size:17;mso-fareast-language:EN-IN'><span
  style='mso-spacerun:yes'>                  </span><span
  style='mso-spacerun:yes'> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controller of Examinations<o:p></o:p></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:22;height:2.5pt'>
  <td width=690 nowrap valign=bottom style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:2.5pt'></td>
 </tr><br>
 <tr style='mso-yfti-irow:23;height:20.15pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.15pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span class=SpellE><b><span
  style='font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:"Times New Roman";
  color:black;mso-font-kerning:0pt;mso-ligatures:none;font-size:22px;mso-fareast-language:
  EN-IN'><br>परीक्षार्थियों हेतु महत्वपूर्ण निर्देश</span></b></span><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'> </span></b><span
  class=SpellE><b><span style='font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;mso-ligatures:none;
  mso-fareast-language:EN-IN'><!--&#2361;&#2375;&#2340;&#2369;--></span></b></span><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'> </span></b><span
  class=SpellE><b><span style='font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;mso-ligatures:none;
  mso-fareast-language:EN-IN'><!--&#2350;&#2361;&#2340;&#2381;&#2357;&#2346;&#2370;&#2352;&#2381;&#2339;--></span></b></span><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'> </span></b><span
  class=SpellE><b><span style='font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;mso-ligatures:none;
  mso-fareast-language:EN-IN'><!--&#2344;&#2367;&#2352;&#2381;&#2342;&#2375;&#2358;--></span></b></span><b><span
  style='mso-ascii-font-family:Calibri;mso-fareast-font-family:"Times New Roman";
  mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'><o:p></o:p></span></b></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.15pt'></td>
 </tr>
 <tr style='mso-yfti-irow:24;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='font-size:9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:
  EN-IN'> <span style='mso-spacerun:yes'> </span></span></b><span
  style='font-size:9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:
  EN-IN'><span style='mso-spacerun:yes'> </span></span><span class=SpellE><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;mso-ligatures:none;font-size:18px;
  mso-fareast-language:EN-IN'><br><b>1.</b>&nbsp;&nbsp;परीक्षार्थी को परीक्षा के प्रथम दिवस परीक्षा प्रारम्भ समय के आधा घंटा पूर्व तथा अन्य दिवसों में 15 मिनट पूर्व परीक्षा हॉल में प्रवेश की अनुमति दी जाएगी।</span></span><span
  style='font-size:9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:
  EN-IN'> </span><span class=SpellE><span style='font-size:9.0pt;font-family:
  "Nirmala UI",sans-serif;mso-fareast-font-family:"Times New Roman";color:black;
  mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:EN-IN'>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:25;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><b><span
  style='font-size:9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:
  EN-IN'></span></b><span style='font-size:9.0pt;mso-ascii-font-family:Calibri;
  mso-fareast-font-family:"Times New Roman";mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;color:black;mso-font-kerning:0pt;mso-ligatures:
  none;mso-fareast-language:EN-IN'> <span style='mso-spacerun:yes'>  </span></span><span
  class=SpellE><span style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;
  mso-fareast-font-family:"Times New Roman";color:black;mso-font-kerning:0pt;
  mso-ligatures:none;font-size:18px;mso-fareast-language:EN-IN'><b>2.</b>&nbsp;&nbsp;परीक्षार्थी को प्रवेश केन्द्र पर केन्द्राधीक्षक तथा उनके अधिकृत व्यक्ति विश्वविद्यालय द्वारा अधिकृत व्यक्ति वीक्षक के नियन्त्रण व अनुशासन में रहना होगा,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;तथा प्रवेश पत्र मांगने पर उन्हें प्रस्तुत करना होगा।<!--&#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2366;&#2352;&#2381;&#2341;&#2368;--></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>3.</b>&nbsp;&nbsp;नयी प्रश्न पत्र पद्धति के अंतर्गत परीक्षार्थी को अपने प्रश्न पत्र के समस्त उत्तर मुख्य उत्तरपुस्तिका में ही देने होंगे। परीक्षार्थी को किसी प्रकार की पूरक /<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;अतिरिक्त उत्तरपुस्तिका नही दी जाएगी |</span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>4.</b>&nbsp;&nbsp;परीक्षार्थी परीक्षा केन्द्र में प्रवेश करने से पूर्व यह सुनिश्चित कर लें कि परीक्षार्थी के पास कोई कागज या कॉपी अथवा टिप्पणी वगैरह अथवा अन्य कोई वस्तु<br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;जिसमे संकेत हो जो कि प्रश्नों को उत्तरित करने में सहायक सिद्ध हो सकती हो, नहीं होनी चाहिए अन्यथा उसे अनुचित साधनों के प्रयोग की श्रेणी में माना <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;जायेगा।</span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>5.</b>&nbsp;&nbsp;परीक्षार्थी, परीक्षा कक्ष में अपने निर्धारित स्थान पर बैठने से पूर्व अपने आस-पास से स्थान को भी भलीभांति चेक कर लें कि किसी प्रकार की कोई<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;अनुचित साधन उपयोग की सामग्री ना हो।</span></span></p>
  </td>
   <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>6.</b>&nbsp;&nbsp;परीक्षार्थी परीक्षा आरम्भ समय से पूर्व अपनी उत्तरपुस्ति का पर कुछ ना लिखें साथ ही उत्तरपुस्तिका के आवरण पृष्ट पर निर्धारित स्थान के अतिरिक्त <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;उत्तरपुस्तिका में कहीं पर भी अनुक्रमांक या अन्य कोई पहचान चिह्न अंकित ना करे अन्यथा उसे अनुचित साधन प्रयोग की श्रेणी में लिया जायेगा।</span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 
 <tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>7.</b>&nbsp;&nbsp;परीक्षार्थी को परीक्षा केन्द्र परिसर में हथियार, मोबाइल फोन, इलेक्ट्रॉनिक गैजेट्स व अन्य किसी प्रकार की अनावश्यक सामग्री आदि लाना तथा <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;धूम्रपान,मद्यपान, तम्बाकू, गुटखा आदि लाना/सेवन करना सर्वथा वर्जित है, अन्य थानियमानुसार कार्यवाही की जाएगी।</span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
 <tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>8.</b>&nbsp;&nbsp;समस्त विवादों का न्यायिक क्षेत्र आगरा रहेगा।</span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>

<tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>9.</b>&nbsp;&nbsp;&nbsp;प्रश्न-पत्र में दिये गए निर्देशानुसार ही प्रश्न-पत्र हल किया जाना है।</span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>

<tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>10.</b> दिव्यांग परीक्षार्थी को समस्त सुविधाएं विश्वविद्यालय नियमानुसार देय होगी।</span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>

<tr style='mso-yfti-irow:26;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;font-family:"Nirmala UI",sans-serif;mso-fareast-font-family:
  "Times New Roman";color:black;mso-font-kerning:0pt;font-size:18px;mso-ligatures:none;
  mso-fareast-language:EN-IN'><span style='mso-spacerun:yes'>      </span><span
  class=SpellE><b>11.</b> उत्तर पुस्तिका के OMR (उत्तर पत्रक) पर सभी प्रविष्टियाँ सावधानी पूर्वक भरें। सूचनाओं को व्हाइटनर, ब्लेड अथवा रबड़ आदि से नहीं मिटाया |<br><br></span></span></p>
  </td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>

 <tr style='mso-yfti-irow:42;mso-yfti-lastrow:yes;height:13.8pt'>
  <td width=699 nowrap colspan=6 style='width:524.2pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:solid black 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;line-height:normal;mso-element:
  frame;mso-element-frame-hspace:9.0pt;mso-element-wrap:around;mso-element-anchor-horizontal:
  margin;mso-element-top:-42.0pt;mso-height-rule:exactly'><span
  style='font-size:9.0pt;mso-ascii-font-family:Calibri;mso-fareast-font-family:
  "Times New Roman";mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri;
  color:black;mso-font-kerning:0pt;mso-ligatures:none;mso-fareast-language:
  EN-IN'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td>DjBabu</td>
  <td width=690 style='width:517.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.8pt'></td>
 </tr>
</table>
</div>
</a>
</body>
</html>
