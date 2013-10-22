#Musitect 
##A Toolkit for Songwriters
###Jasper Boyd
__Type:__ Webapp |
__Languages:__ PHP, SASS, HTML5 |
__Frameworks:__ Laravel & Compass

---

##Summary 

The goal of musitect is to make it easier for songwriters to notate their compositions without knowing classical notation (although that will be available in a later version). Furthermore the app will incorporate suggestions for chord choice along with fingerings on piano and guitar with the end goal being to take the thinking out of song-writing, allowing the user's mind to focus on more important compositional choices. Beyond these more specialized tools the site will also offer a beats-per-minute counter and a tuner. 

##Features 

- Lyric & Chord Entry GUI 
    - Built-In Chord Suggestions
- BPM Counter GUI
- Tuner GUI
- Personal Song Library *(User Accounts)*
    - Demo / Final Audio 
    - Lead Sheet for Songs


##Design 

- Home page
	- Introduction 
	- User login
	- User registration
	    - special system (not just one form)
	         - Ask for name first (just first name) -> password -> email
	- Guest user (not V1)  
- User Home 
	- Song List 
	- New Song Button 
- Song Page
	- Lyrics
		- Spellcheck 
		- thesaurus 
		- Import ability (maybe V1) 
	- Chords
		- Bars 
			- Switchable
		- Popups Reference
			- Notes
			- Complement Chords
			- Alternate Chords
			- Fingering's 
	- Asides 
		- BPM counter
			- Syncs song automatically 
			- Overidable by manual input
		- Tuner 
			- Switchable / Hidable	
    - Modes 
        - Compose Mode 
        - Perform Mode 


##Custom Process

Because I'm working alone I think that requires a much different process than one designed for a large group of people. … 

##Assumptions

Probably my biggest assumptions are related to the construction of the GUI which is an area where I'm the least experienced. I've done a lot of work with CSS and SASS before, but I'm not sure if what I have a mind is doable with those style tools alone. My hope is to create a GUI that's responsive and simple to use. Not just a bunch of "<input>".  

##Risks

I don't think there are too many risks involved in this project. Laravel's built-in authentication will mean that user accounts are going to be fairly secure. Another potential risk would be data loss due to poor programming, which is something I'm going to pay close attention to in testing.  

##Contengency 