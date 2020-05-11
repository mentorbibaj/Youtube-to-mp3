# Youtube-to-mp3

Simple but yet so useful, convert your favorite Youtube video to mp3 on the go!

### Prerequisites

You need to install these tools to make it work:

* [PHP](https://www.php.net/) 
* [ffmpeg](https://www.ffmpeg.org/) 
* [youtube-dl](https://youtube-dl.org/)
* [ngrok](https://ngrok.com/) 


### Installing

Step 1: After installing all the tools mentioned above, upload index.php inside a webhosting.

Step 2: If you didn't make a global access for youtube-dl, then copy ffmpeg.exe, ffplay.exe, ffprobe.exe, download.php inside the same folder.

Step 3: run command: "ngrok http 80" to make your local project public.

Step 4: Copy the link generated from the command in Step 3 and put it inside variable $base in index.php(from step 1).

Step 5: Access your webhosting and try it out. Wait till the video gets converted because, I did not use ajax or any other libraries for the requests...

* You should keep in mind that "ngrok" is a free tool and does not process requests that fast. To replace "ngrok" use your own dedicated server, where you should have public ip-s and a possibility for the php to run the "exec" function.

## How it works

First you paste the link and then click Download button, after that the file video first gets converted locally, and the download.php file return the path with the link of the file to be download, then index.php checks if there is any response from the download.php and if there is it downloads that file to your device.

## Built With

* [PHP](https://www.php.net/) - Used to access the interface in a simple way
* [ffmpeg](https://www.ffmpeg.org/) - Used by youtube-dl (cross-platform solution to record, convert and stream audio and video)
* [youtube-dl](https://youtube-dl.org/) - Used to convert youtube to mp3
* [ngrok](https://ngrok.com/) - Used to access localhost anywhere

## Contributing

This is the first and maybe the last version of this simple app, please feel free to contribute. 

## Authors

* **Mentor Bibaj** - *Initial work* - [mentorbibaj](https://github.com/mentorbibaj)

