# moodle-availability_dedicationtime
Moodle availability plugin which lets users restrict resources and activities with dedication time

This plugin depends upon the data calculated by block_dedication. So make sure to install block_dedication plugin( https://moodle.org/plugins/block_dedication) and its data is calculated for some courses and users.

# Features
1. restrict the activities and resources with dedication time (time spent in the course).
2. restiction can be applied in either in hours or minutes.

# Release 4.1.1
1. Added availability message improvements as suggested by Dan Marsden

# Installation
1. Download the latest block_dedication plugin from git repository (https://github.com/catalyst/moodle-block_dedication) or moodle plugin directory (https://moodle.org/plugins/block_dedication) and unzip the contents into the /blocks/dedication directory or upload it from the install plugin admin interface.
2. Download the latest availability_dedication plugin from git repository or moodle plugin directory and unzip the contents into the /availability/condition/ directory. Or upload it from the install plugin admin interface.

# How to Use
1. Create a course and add some activities.
2. Access the course from student login and spend some time (around 5 to 10 minutes) in the course.
3. Run **the Collect data for block dedication** scheduled task manually or automatically from admin account.
4. Create an activity with restrict access set to dedication time with xx hours or xx minutes from teacher or admin account.
5. Login a student account and check the activity restriction on course home page.

# Screenshots
<img width="381" alt="Screenshot 2024-11-10 231043" src="https://github.com/user-attachments/assets/a182c909-3a74-4868-ab06-8cd5aafba831">

![image](https://github.com/user-attachments/assets/623b5ebc-0e1d-4b7c-9c5c-4b20a56bbf6e)

![image](https://github.com/user-attachments/assets/5241fccc-2916-42f2-987e-93e5bec808e9)

# Support
If you encounter issues or bugs, please open an issue in the official GitHub repository: [GitHub Issues](https://github.com/santoshndev/moodle-availability_dedicationtime/issues)

# Author
Author: Santosh Nagargoje

Web profile: https://santoshnagargoje.in/

