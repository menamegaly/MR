#!/bin/bash

# users controller
CTL="${BASEURL}index.php?/module/users/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/users.py" -o "${MUNKIPATH}preflight.d/users.py"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/users.py"

	# Set preference to include this file in the preflight check
	setreportpref "users" "${CACHEPATH}users.plist"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/users.py"

	# Signal that we had an error
	ERR=1
fi