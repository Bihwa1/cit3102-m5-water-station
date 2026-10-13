# cit3102-m5-water-station
Project title: cit3102-m5-water-station

Section: IT2E

Resource: Water station

Names:
Lamando, Louie D.
Buensuceso, Ramon Reouben R.


Why does DELETE return 204 and not 200?:
Answer:

The purpose of the DELETE verb is to remove records or data within records. When something is removed using DELETe, nothing will remain; as in, nothing at all. Returning status code 204 with an empty body is a reply to the caller to signal that the deletion is complete and confirm that there is nothing there anymore.
