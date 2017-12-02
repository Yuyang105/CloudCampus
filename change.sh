for file in `cat alist`; do
    sed -i '/$con = mysql_connect("mysql9.namesco.net","cloudcampus","3350335012")/a\$con = mysql_connect("localhost","root","")' $file;
    sed -i '/$con = mysql_connect("mysql9.namesco.net","cloudcampus","3350335012")/d' $file;
done
