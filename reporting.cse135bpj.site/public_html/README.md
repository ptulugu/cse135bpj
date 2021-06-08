Authentication
--------------
We chose Passport.js to implement authentication because it was mentioned in
discussion, its ease of use, and its ability to check if the user is logged
in before accessing any of its pages. We created a REST endpoint for the
users of the website, and the admin can use the editor controls in the
grid to create, read, update, and delete users. We also used bcryptjs to
encrypt each user's password. Whenever an admin updates or creates a user,
the password is then encrypted. For each user, we added an admin bit that
determined whether or not the user is an admin, and this bit is checked
at every log in.

User Management
---------------
Website Credentials:
    https://reporting.cse135bpj.site/
    user:     grader
    password: cse135Password

User Credentials:
    Admin:
    Username: admin
    Password: admin
    Email:    admin@example.com

    Normal User:
    Username: user
    Password: user
    Email:    user@example.com

Dashboard
---------
Website Metrics:
We decided to use a grid to display various metrics collected in all of
the website's pages. We can easily keep track of how many total users and
unique users for the day. We also kept track of how many sessions there
are, along with the average sessions created per user, the average session
duration, and the number of total pageviews. Sessions were destroyed and
created each time the user visits the website, or each time the user is
inactive for 5 minutes. Bounce rate is also included, showing how often 
users visit the website and immediately leave. By using a grid to display
these metrics, we can easily get a quick summary of the activity of our
users, and improve on our bounce rate, as well as make the website more
interactive and engaging if there are a lot of sessions and inactivity.

User Activity through the Day:
With information about user activity throughout the day, we may be able
to pinpoint information such as what a user may be doing. For instance,
a user accessing php tutorial resources at night/midnight may be a student.
Using this information, we can update our site to our target demographic.
Knowing information about what times are most active is also important for
things such as figuring out what advertising to so during what hour.
Here we chose a bar chart as this was categorical data. Each category has
two bars, the first representing total users and the second representing
ratio between active/less active users. The total user bar is useful as it
helps remove visual illusions our height differences in the ratio bar, and
also is useful to compare total user trends over time. We chose green to
represent active users, red for less active as this is what a normal user
would probably be comfortable with.

Operating Systems Used:
We decided to display operating systems to see if there was any discrepancy
in who is visiting our site. We chose to use a pie chart to showcase the
ratio of users of different operating systems. A pie chart makes it easy
to make a comparison with a quick glance, and with only a few different
slices it is extremely readable.

Report
------
Operating Systems Used (Submitting for Assignment):
We decided to report on users with different operating systems because it
seems like a useful metric to ensure that our site runs smoothly on all
platforms. If Windows or Macintosh visitors had excessively high load times,
it might lead to them not coming back to the site or bouncing. Knowing the
amount of users of each platform is also important for prioritization. If
there are a few visitors coming in on platforms besides Windows and Mac that
have high load times, it might not be a priority if the amount of users
affected is low. If we notice that there are a high number of users coming
from different platforms and they take ages to load, then it might be time
to try and come up with a fix.

Website Metrics (Extra Credit):
Along with the grid mentioned earlier, we used a line graph to show
the total average time of inactivity on all pages each day in order
for us to determine whether or not we should make the site more
engaging so that users can be able to click and type. We also used
a grid to keep track of each website, along with its number of page
visits, clicks, and time of inactivity on that site. We can determine
which sites are the most popular and most interactive with this data,
but we can also see what sites are underperforming so we can improve
on them.