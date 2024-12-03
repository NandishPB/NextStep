const clearList=['screen-overlay','signup','login','materials','interview','menu','about'];function clearOverlay(){clearList.forEach(item=>{document.getElementById(item).style.display='none';});}function resetForm(){clearOverlay();document.querySelectorAll('form').forEach(form=>{form.addEventListener('reset',function(event){form.querySelectorAll('input').forEach(input=>{input.style.backgroundColor='rgba(255,255,255,.1)';});});});}function clearOnEscape(){document.addEventListener('keydown',function(press){if(press.key==='Escape')clearOverlay();});}function loginOverlay(){clearOverlay();clearOnEscape();document.getElementById('screen-overlay').style.display='block';document.getElementById('login').style.display='block';}function signupOverlay(){clearOverlay();clearOnEscape();document.getElementById('screen-overlay').style.display='block';document.getElementById('signup').style.display='block';}function menuOverlay(){clearOverlay();clearOnEscape();document.getElementById('screen-overlay').style.display='block';document.getElementById('menu').style.display='flex';}function unameValidate(){const regex=/^(?![0-9.-])(?=.{1,32}$)[a-zA-Z0-9._-]+(?<![.-])$/;const regs=['inlog','insig'];regs.forEach(reg=>{if(document.getElementById(reg)&&(regex.test(document.getElementById(reg).value)||document.getElementById(reg).value===''))document.getElementById(reg).style.backgroundColor='rgba(255,255,255,.1)';else document.getElementById(reg).style.backgroundColor='rgba(255,0,0,.1)';});}function materialList(){clearOnEscape();clearOverlay();document.getElementById('screen-overlay').style.display='block';document.getElementById('materials').style.display='block';}function interviewList(){clearOverlay();clearOnEscape();document.getElementById('screen-overlay').style.display='block';document.getElementById('interview').style.display='block';}function aboutUs(){clearOverlay();clearOnEscape();document.getElementById('screen-overlay').style.display='block';document.getElementById('about').style.display='flex';}
