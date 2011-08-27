#!/usr/bin/python
#------------------------------------------------------------------------------
# J. Gregg Thomason (gregg.thomason@gmail.com)
# inspired by https://github.com/markhuot/ptags
#------------------------------------------------------------------------------

import sys,re,glob,os


directorypath = sys.argv[1]
for root,dir,files in os.walk(directorypath):
	if 'php' in files:
		print files
