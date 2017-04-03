alert('Site en construction');

function toggle(elemID){
	var elem= document.GetElementById(elemID);

	if (elem.style.display === 'block') {
		elem.Style.Display = 'none';
	}
	else
	{
		elem.style.display = 'block';
	}
}
