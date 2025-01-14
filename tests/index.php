<?php

/**
 * Pinga Cookie
 *
 * Written in 2023 by Taras Kondratyuk (https://getpinga.com)
 * Based on PHP-Cookie (https://github.com/delight-im/PHP-Cookie) by delight.im (https://www.delight.im/)
 *
 * @license MIT
 */

// enable error reporting
\error_reporting(\E_ALL);
\ini_set('display_errors', 'stdout');

\header('Content-type: text/plain; charset=utf-8');

require __DIR__.'/../vendor/autoload.php';

/* BEGIN TEST COOKIES */

// start output buffering
\ob_start();

\testCookie(null);
\testCookie(false);
\testCookie('');
\testCookie(0);
\testCookie('hello');
\testCookie('hello', false);
\testCookie('hello', true);
\testCookie('hello', null);
\testCookie('hello', '');
\testCookie('hello', 0);
\testCookie('hello', 1);
\testCookie('hello', 'world');
\testCookie('hello', 123);
\testCookie(123, 'world');
\testCookie('greeting', '¡Buenos días!');
\testCookie('¡Buenos días!', 'greeting');
\testCookie('%a|b}c_$d!f"g-h(i)j$', 'value value value');
\testCookie('%a|b}c_$d!f"g-h(i)j$', '%a|b}c_$d!f"g-h(i)j$');
\testCookie('hello', 'world', '!');
\testCookie('hello', 'world', '');
\testCookie('hello', 'world', false);
\testCookie('hello', 'world', null);
\testCookie('hello', 'world', true);
\testCookie('hello', 'world', 0);
\testCookie('hello', 'world', '');
\testCookie('hello', 'world', -1);
\testCookie('hello', 'world', 234234);
\testCookie('hello', 'world', \time() + 60 * 60 * 24);
\testCookie('hello', 'world', \time() + 60 * 60 * 24 * 30);
\testCookie('hello', 'world', \time() + 86400, null);
\testCookie('hello', 'world', \time() + 86400, false);
\testCookie('hello', 'world', \time() + 86400, true);
\testCookie('hello', 'world', \time() + 86400, 0);
\testCookie('hello', 'world', \time() + 86400, '');
\testCookie('hello', 'world', \time() + 86400, '/');
\testCookie('hello', 'world', \time() + 86400, '/foo');
\testCookie('hello', 'world', \time() + 86400, '/foo/');
\testCookie('hello', 'world', \time() + 86400, '/buenos/días/');
\testCookie('hello', 'world', \time() + 86400, '/buenos días/');
\testCookie('hello', 'world', \time() + 86400, '/foo/', null);
\testCookie('hello', 'world', \time() + 86400, '/foo/', false);
\testCookie('hello', 'world', \time() + 86400, '/foo/', true);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 0);
\testCookie('hello', 'world', \time() + 86400, '/foo/', '');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com');
\testCookie('hello', 'world', \time() + 86400, '/foo/', '.example.com');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'www.example.com');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'días.example.com');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'localhost');
\testCookie('hello', 'world', \time() + 86400, '/foo/', '127.0.0.1');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', null);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', 0);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', '');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', 'hello');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', 7);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', -7);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, null);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, false);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, true);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, 0);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, '');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, 'hello');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, 5);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', false, -5);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, null);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, false);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, true);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, 0);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, '');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, 'hello');
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, 5);
\testCookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, -5);
\testCookie('TestCookie', 'php.net');
\testCookie('TestCookie', 'php.net', \time() + 3600);
\testCookie('TestCookie', 'php.net', \time() + 3600, '/~rasmus/', 'example.com', 1);
\testCookie('TestCookie', '', \time() - 3600);
\testCookie('TestCookie', '', \time() - 3600, '/~rasmus/', 'example.com', 1);
\testCookie('cookie[three]', 'cookiethree');
\testCookie('cookie[two]', 'cookietwo');
\testCookie('cookie[one]', 'cookieone');
\testEqual((new \Pinga\Cookie\Cookie('SID'))->setValue('31d4d96e407aad42'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=Lax');
@\testEqual((new \Pinga\Cookie\Cookie('SID'))->setValue('31d4d96e407aad42')->setSameSiteRestriction('None'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=None');
\testEqual((new \Pinga\Cookie\Cookie('SID'))->setValue('31d4d96e407aad42')->setSameSiteRestriction('None')->setSecureOnly(true), 'Set-Cookie: SID=31d4d96e407aad42; path=/; secure; httponly; SameSite=None');
@\testEqual((new \Pinga\Cookie\Cookie('SID'))->setValue('31d4d96e407aad42')->setDomain('localhost')->setSameSiteRestriction('None'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=None');
\testEqual((new \Pinga\Cookie\Cookie('SID'))->setValue('31d4d96e407aad42')->setDomain('localhost')->setSameSiteRestriction('None')->setSecureOnly(true), 'Set-Cookie: SID=31d4d96e407aad42; path=/; secure; httponly; SameSite=None');
\testEqual((new \Pinga\Cookie\Cookie('SID'))->setValue('31d4d96e407aad42')->setSameSiteRestriction('Strict'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=Strict');
\testEqual((new \Pinga\Cookie\Cookie('SID'))->setValue('31d4d96e407aad42')->setDomain('localhost')->setSameSiteRestriction('Strict'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=Strict');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('localhost'), 'Set-Cookie: key=value; path=/; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('.localhost'), 'Set-Cookie: key=value; path=/; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('127.0.0.1'), 'Set-Cookie: key=value; path=/; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('.local'), 'Set-Cookie: key=value; path=/; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('example.com'), 'Set-Cookie: key=value; path=/; domain=.example.com; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('.example.com'), 'Set-Cookie: key=value; path=/; domain=.example.com; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('www.example.com'), 'Set-Cookie: key=value; path=/; domain=.www.example.com; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('.www.example.com'), 'Set-Cookie: key=value; path=/; domain=.www.example.com; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('blog.example.com'), 'Set-Cookie: key=value; path=/; domain=.blog.example.com; httponly; SameSite=Lax');
\testEqual((new \Pinga\Cookie\Cookie('key'))->setValue('value')->setDomain('.blog.example.com'), 'Set-Cookie: key=value; path=/; domain=.blog.example.com; httponly; SameSite=Lax');

\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: SID'), '');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: SID=31d4d96e407aad42'), 'Set-Cookie: SID=31d4d96e407aad42');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: SID=31d4d96e407aad42; path=/; httponly'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly');
@\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=None'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=None');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: SID=31d4d96e407aad42; path=/; secure; httponly; SameSite=None'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; secure; httponly; SameSite=None');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=Strict'), 'Set-Cookie: SID=31d4d96e407aad42; path=/; httponly; SameSite=Strict');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: __Host-foo=e3328c803834'), 'Set-Cookie: __Host-foo=e3328c803834');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: __%48ost-foo=e3328c803834'), 'Set-Cookie: __%48ost-foo=e3328c803834');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: __Secure-foo=e3328c803834'), 'Set-Cookie: __Secure-foo=e3328c803834');
\testEqual(\Pinga\Cookie\Cookie::parse('Set-Cookie: __%53ecure-foo=e3328c803834'), 'Set-Cookie: __%53ecure-foo=e3328c803834');

\setcookie('hello', 'world', \time() + 86400, '/foo/', 'example.com', true, true);
$cookie = \Pinga\Cookie\Cookie::parse(\Pinga\Http\ResponseHeader::take('Set-Cookie'));

\testEqual($cookie, (new \Pinga\Cookie\Cookie('hello'))->setValue('world')->setMaxAge(86400)->setPath('/foo/')->setDomain('example.com')->setHttpOnly(true)->setSecureOnly(true)->setSameSiteRestriction(null));

($cookie->getName() === 'hello') or \fail(__LINE__);
($cookie->getValue() === 'world') or \fail(__LINE__);
($cookie->getExpiryTime() === \time() + 86400) or \fail(__LINE__);
($cookie->getMaxAge() === 86400) or \fail(__LINE__);
($cookie->getPath() === '/foo/') or \fail(__LINE__);
($cookie->getDomain() === '.example.com') or \fail(__LINE__);
($cookie->isHttpOnly() === true) or \fail(__LINE__);
($cookie->isSecureOnly() === true) or \fail(__LINE__);
($cookie->getSameSiteRestriction() === null) or \fail(__LINE__);

\testEqual(\Pinga\Cookie\Cookie::exists('SESSID'), isset($_COOKIE['SESSID']));
\testEqual(\Pinga\Cookie\Cookie::exists('other'), isset($_COOKIE['other']));
\testEqual(\Pinga\Cookie\Cookie::get('SESSID'), (isset($_COOKIE['SESSID']) ? $_COOKIE['SESSID'] : null));
\testEqual(\Pinga\Cookie\Cookie::get('SESSID', 42), (isset($_COOKIE['SESSID']) ? $_COOKIE['SESSID'] : 42));
\testEqual(\Pinga\Cookie\Cookie::get('other'), (isset($_COOKIE['other']) ? $_COOKIE['other'] : null));
\testEqual(\Pinga\Cookie\Cookie::get('other', 42), (isset($_COOKIE['other']) ? $_COOKIE['other'] : 42));

!isset($_COOKIE['cefa389e458b']) or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('cefa389e458b'))->setValue('a858c4a03224')->save();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: cefa389e458b=a858c4a03224; path=/; httponly; SameSite=Lax');
!isset($_COOKIE['cefa389e458b']) or \fail(__LINE__);

!isset($_COOKIE['c0f3a2ea81aa']) or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('c0f3a2ea81aa'))->setValue('dabf2c1490a5')->setDomain('example.com')->save();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: c0f3a2ea81aa=dabf2c1490a5; path=/; domain=.example.com; httponly; SameSite=Lax');
!isset($_COOKIE['c0f3a2ea81aa']) or \fail(__LINE__);

!isset($_COOKIE['c19718a89afd']) or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('c19718a89afd'))->setValue('f638cfcf49a8')->saveAndSet();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: c19718a89afd=f638cfcf49a8; path=/; httponly; SameSite=Lax');
(isset($_COOKIE['c19718a89afd']) && $_COOKIE['c19718a89afd'] === 'f638cfcf49a8') or \fail(__LINE__);

!isset($_COOKIE['b377b18ca9e6']) or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('b377b18ca9e6'))->setValue('dbeaebb92e43')->setDomain('example.com')->saveAndSet();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: b377b18ca9e6=dbeaebb92e43; path=/; domain=.example.com; httponly; SameSite=Lax');
(isset($_COOKIE['b377b18ca9e6']) && $_COOKIE['b377b18ca9e6'] === 'dbeaebb92e43') or \fail(__LINE__);

$_COOKIE['a8a78153b857'] = 'ed2e8ff8629f';
(isset($_COOKIE['a8a78153b857']) && $_COOKIE['a8a78153b857'] === 'ed2e8ff8629f') or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('a8a78153b857'))->delete();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: a8a78153b857=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; httponly; SameSite=Lax');
(isset($_COOKIE['a8a78153b857']) && $_COOKIE['a8a78153b857'] === 'ed2e8ff8629f') or \fail(__LINE__);
unset($_COOKIE['a8a78153b857']);

$_COOKIE['c5dd45883e4b'] = 'b42f7c9de3dd';
(isset($_COOKIE['c5dd45883e4b']) && $_COOKIE['c5dd45883e4b'] === 'b42f7c9de3dd') or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('c5dd45883e4b'))->setDomain('example.com')->delete();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: c5dd45883e4b=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=.example.com; httponly; SameSite=Lax');
(isset($_COOKIE['c5dd45883e4b']) && $_COOKIE['c5dd45883e4b'] === 'b42f7c9de3dd') or \fail(__LINE__);
unset($_COOKIE['c5dd45883e4b']);

$_COOKIE['ed050c7d7e62'] = 'a8b362c78a04';
(isset($_COOKIE['ed050c7d7e62']) && $_COOKIE['ed050c7d7e62'] === 'a8b362c78a04') or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('ed050c7d7e62'))->deleteAndUnset();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: ed050c7d7e62=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; httponly; SameSite=Lax');
!isset($_COOKIE['ed050c7d7e62']) or \fail(__LINE__);
unset($_COOKIE['ed050c7d7e62']);

$_COOKIE['c8f13ff2a8ad'] = 'cd0a70b224e8';
(isset($_COOKIE['c8f13ff2a8ad']) && $_COOKIE['c8f13ff2a8ad'] === 'cd0a70b224e8') or \fail(__LINE__);
(new \Pinga\Cookie\Cookie('c8f13ff2a8ad'))->setDomain('example.com')->deleteAndUnset();
\testEqual(\Pinga\Http\ResponseHeader::take('Set-Cookie'), 'Set-Cookie: c8f13ff2a8ad=deleted; expires=Thu, 01-Jan-1970 00:00:01 GMT; Max-Age=0; path=/; domain=.example.com; httponly; SameSite=Lax');
!isset($_COOKIE['c8f13ff2a8ad']) or \fail(__LINE__);
unset($_COOKIE['c8f13ff2a8ad']);

/* END TEST COOKIES */

echo 'ALL TESTS PASSED' . "\n";

function testCookie($name, $value = null, $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = false) {
	$actualValue = \Pinga\Cookie\Cookie::buildCookieHeader($name, $value, $expire, $path, $domain, $secure, $httpOnly);

	if (\is_null($actualValue)) {
		$expectedValue = @\simulateSetCookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
	}
	else {
		$expectedValue = \simulateSetCookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
	}

	\testEqual($actualValue, $expectedValue);
}

function testEqual($actualValue, $expectedValue) {
	$actualValue = (string) $actualValue;
	$expectedValue = (string) $expectedValue;

	echo '[';
	echo $expectedValue;
	echo ']';
	echo "\n";

	if (\strcasecmp($actualValue, $expectedValue) !== 0) {
		echo 'FAILED: ';
		echo '[';
		echo $actualValue;
		echo ']';
		echo ' !== ';
		echo '[';
		echo $expectedValue;
		echo ']';
		echo "\n";

		exit;
	}
}

function simulateSetCookie($name, $value = null, $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = false) {
	\setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);

	return \Pinga\Http\ResponseHeader::take('Set-Cookie');
}

function fail($lineNumber) {
	exit('Error in line ' . $lineNumber);
}
