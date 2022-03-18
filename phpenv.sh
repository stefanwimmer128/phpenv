export PHPENV="${PHPENV:-$(which php)}"

export PATH="$(dirname "$(readlink -f "${0:-$BASH_SOURCE}")")/bin:$PATH"
