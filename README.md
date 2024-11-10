# moodle-availability_dedicationtime
Moodle availability plugin which lets users restrict resources and activities with dedication time

This plugin depends upon the data calculated by block_dedication. So make sure to install block_dedication plugin( https://moodle.org/plugins/block_dedication) and its data is calculated for some courses and users.

![image](https://github.com/user-attachments/assets/623b5ebc-0e1d-4b7c-9c5c-4b20a56bbf6e)

![image](https://github.com/user-attachments/assets/5241fccc-2916-42f2-987e-93e5bec808e9)


# # Installation
Download the latest availability_dedication.zip and unzip the contents into the /availability/condition/ directory. Or upload it from the plugin admin interface.
1. Install the block_dedication plugin.
2. Create a course and add some activities.
3. Access the course from student login and spend some time in the course.
4. Run **the Collect data for block dedication** scheduled task manually or automatically from admin account.
5. Create an activity with restrict access set to dedication time with xx hours and xx minutes from teacher or admin account.
6. Login a student account and observe the course page.

# #Author

Author: Santosh Nagargoje

Web profile: https://santoshnagargoje.in/

