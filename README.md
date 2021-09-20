本機環境建置 

下載 三位一體 https://sourceforge.net/projects/appserv/
設定如以下網址  https://wuangus.cc/appserv/
接著到 C:\AppServ\Apache24\conf\httpd.conf 裡面更改 檔案root路徑。

DocumentRoot "C:/Users/USER/Desktop/motifla"  ( 你放的檔案位置 )
<Directory "C:/Users/USER/Desktop/motifla">

接著重啟 apache 
網址輸入 127.0.0.1   port 80


