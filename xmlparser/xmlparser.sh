#!/bin/bash
#wget -O tmp/rssfeed.xml http://feed.amberalert.eu/rssext.xml
# curl -o tmp/rssfeed.xml http://feed.amberalert.eu/rssext.xml

FEEDNAME='rssfeed.xml'
NAMES='chLNames.arr'
NLD='NLD.csv'
LAST='last'

if [ $# -eq 0 ] 
	then
	FEEDPATH=tmp/
	else
	FEEDPATH=$1/
fi 

curl -s -z $FEEDPATH$FEEDNAME -o $FEEDPATH$FEEDNAME http://feed.amberalert.eu/rssext.xml

xmlstarlet sel -t -m "/rss/channel/item" -o "\"" -v "np:msgid" -o "\",\"" -v "title" -o "\"" -n $FEEDPATH$FEEDNAME > $FEEDPATH$NAMES

xmlstarlet sel -t -m "/rss/channel/item" -v "np:msgid" -o "," -v "title" -o "," -v "link" -o "," -v "description" -o "," -v "np:media" -o "," -v "np:PublishedDate" -o "," -n $FEEDPATH$FEEDNAME > $FEEDPATH$NLD

touch $FEEDPATH$LAST

#rm -f tmp/rssfeed.xml
