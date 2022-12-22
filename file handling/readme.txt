$_FILES['filename']['name']; -- returns file name
$_FILES['filename']['type']; -- returns MIME type of file 
MIME means (Multipurpose Internet Mail Extensions) which is used to share files over SMTP
$_FILES['filename']['size']; -- returns file size
$_FILES['filename']['tmp_name']; -- returns temporary file name of the file which was stored on the server
$_FILES['filename']['error']; -- returns error code associated with this file

move_upload_file() -- moves the uploaded file to a new location.check if the file is uploaded through 
post request.