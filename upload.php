<?php
move_uploaded_file($_FILES["audioData"]["tmp_name"], 'test-' . time() . '.wav');
?>