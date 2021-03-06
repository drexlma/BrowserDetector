<?php
/**
 * Copyright (c) 2012-2015, Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category  BrowserDetector
 *
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 *
 * @link      https://github.com/mimmi20/BrowserDetector
 */

namespace BrowserDetector\Detector\Factory;

use BrowserDetector\Detector\Browser\A6Indexer;
use BrowserDetector\Detector\Browser\AbontiBot;
use BrowserDetector\Detector\Browser\Aboundexbot;
use BrowserDetector\Detector\Browser\AboutUsBot;
use BrowserDetector\Detector\Browser\AboutUsBotJohnny5;
use BrowserDetector\Detector\Browser\Abrowse;
use BrowserDetector\Detector\Browser\Acapbot;
use BrowserDetector\Detector\Browser\AccServer;
use BrowserDetector\Detector\Browser\AcoonBot;
use BrowserDetector\Detector\Browser\AdbeatBot;
use BrowserDetector\Detector\Browser\AddCatalog;
use BrowserDetector\Detector\Browser\AddThisRobot;
use BrowserDetector\Detector\Browser\Adidxbot;
use BrowserDetector\Detector\Browser\AdmantxPlatformSemanticAnalyzer;
use BrowserDetector\Detector\Browser\AdobeAIR;
use BrowserDetector\Detector\Browser\AdvBot;
use BrowserDetector\Detector\Browser\AhrefsBot;
use BrowserDetector\Detector\Browser\Airmail;
use BrowserDetector\Detector\Browser\AjaxSnapBot;
use BrowserDetector\Detector\Browser\Akregator;
use BrowserDetector\Detector\Browser\Alexabot;
use BrowserDetector\Detector\Browser\AlexaSiteAudit;
use BrowserDetector\Detector\Browser\AlltopApp;
use BrowserDetector\Detector\Browser\AmazonCloudFront;
use BrowserDetector\Detector\Browser\Amigo;
use BrowserDetector\Detector\Browser\AndroidDownloadManager;
use BrowserDetector\Detector\Browser\AndroidWebkit;
use BrowserDetector\Detector\Browser\AndroidWebView;
use BrowserDetector\Detector\Browser\Anonymizied;
use BrowserDetector\Detector\Browser\AnotherWebMiningTool;
use BrowserDetector\Detector\Browser\AntBot;
use BrowserDetector\Detector\Browser\AolBot;
use BrowserDetector\Detector\Browser\ApacheSynapse;
use BrowserDetector\Detector\Browser\Apercite;
use BrowserDetector\Detector\Browser\AppleAppStoreApp;
use BrowserDetector\Detector\Browser\Applebot;
use BrowserDetector\Detector\Browser\AppleCoreMedia;
use BrowserDetector\Detector\Browser\AppleMail;
use BrowserDetector\Detector\Browser\ApplePubSub;
use BrowserDetector\Detector\Browser\AptHttpTransport;
use BrowserDetector\Detector\Browser\ApusBrowser;
use BrowserDetector\Detector\Browser\ArachnidaWebCrawler;
use BrowserDetector\Detector\Browser\ArchiveBot;
use BrowserDetector\Detector\Browser\ArchiveOrgBot;
use BrowserDetector\Detector\Browser\Arora;
use BrowserDetector\Detector\Browser\AskPeterBot;
use BrowserDetector\Detector\Browser\AstuteSocial;
use BrowserDetector\Detector\Browser\AsynchronousHttpClient;
use BrowserDetector\Detector\Browser\AthenaSiteAnalyzer;
use BrowserDetector\Detector\Browser\AtomicBrowser;
use BrowserDetector\Detector\Browser\AuditmypcWebmasterTool;
use BrowserDetector\Detector\Browser\Avant;
use BrowserDetector\Detector\Browser\AvastSafeZone;
use BrowserDetector\Detector\Browser\BacklinkCrawler;
use BrowserDetector\Detector\Browser\BaiduBoxApp;
use BrowserDetector\Detector\Browser\BaiduBrowser;
use BrowserDetector\Detector\Browser\BaiduHdBrowser;
use BrowserDetector\Detector\Browser\BaiduImageSearch;
use BrowserDetector\Detector\Browser\BaiduMiniBrowser;
use BrowserDetector\Detector\Browser\BaiduMobileSearch;
use BrowserDetector\Detector\Browser\Bandscraper;
use BrowserDetector\Detector\Browser\BckLinks;
use BrowserDetector\Detector\Browser\Beamrise;
use BrowserDetector\Detector\Browser\BegunAdvertisingBot;
use BrowserDetector\Detector\Browser\BigBozz;
use BrowserDetector\Detector\Browser\Bingbot;
use BrowserDetector\Detector\Browser\BingPreview;
use BrowserDetector\Detector\Browser\BitlyBot;
use BrowserDetector\Detector\Browser\Blackberry;
use BrowserDetector\Detector\Browser\BlekkoBot;
use BrowserDetector\Detector\Browser\BlexBot;
use BrowserDetector\Detector\Browser\BloglovinBot;
use BrowserDetector\Detector\Browser\BlogSearch;
use BrowserDetector\Detector\Browser\BlogsharesSpiders;
use BrowserDetector\Detector\Browser\BlukLddcBot;
use BrowserDetector\Detector\Browser\BnfFrBot;
use BrowserDetector\Detector\Browser\BoardReaderFaviconFetcher;
use BrowserDetector\Detector\Browser\Bot360;
use BrowserDetector\Detector\Browser\Bot80Legs;
use BrowserDetector\Detector\Browser\BotAraTurka;
use BrowserDetector\Detector\Browser\BotBot;
use BrowserDetector\Detector\Browser\BotForJce;
use BrowserDetector\Detector\Browser\BotRevolt;
use BrowserDetector\Detector\Browser\Bowser;
use BrowserDetector\Detector\Browser\BrokenLinkCheck;
use BrowserDetector\Detector\Browser\Browser2345;
use BrowserDetector\Detector\Browser\Browsershots;
use BrowserDetector\Detector\Browser\Bubing;
use BrowserDetector\Detector\Browser\BuiBuiBot;
use BrowserDetector\Detector\Browser\BuSecurityProject;
use BrowserDetector\Detector\Browser\ButterflyRobot;
use BrowserDetector\Detector\Browser\CaCrawler;
use BrowserDetector\Detector\Browser\Camino;
use BrowserDetector\Detector\Browser\CamoAssetProxy;
use BrowserDetector\Detector\Browser\CareerBot;
use BrowserDetector\Detector\Browser\CarsAppBrowser;
use BrowserDetector\Detector\Browser\CcBot;
use BrowserDetector\Detector\Browser\CfNetwork;
use BrowserDetector\Detector\Browser\CheckSiteVerificationAgent;
use BrowserDetector\Detector\Browser\Chedot;
use BrowserDetector\Detector\Browser\ChlooeBot;
use BrowserDetector\Detector\Browser\Chrome;
use BrowserDetector\Detector\Browser\Chromium;
use BrowserDetector\Detector\Browser\CitymapScreenshotService;
use BrowserDetector\Detector\Browser\Cliqzbot;
use BrowserDetector\Detector\Browser\CloudFlareAlwaysOnline;
use BrowserDetector\Detector\Browser\CmBrowser;
use BrowserDetector\Detector\Browser\CmsCrawler;
use BrowserDetector\Detector\Browser\CocCocBot;
use BrowserDetector\Detector\Browser\CocCocBrowser;
use BrowserDetector\Detector\Browser\CometBird;
use BrowserDetector\Detector\Browser\ComodoDragon;
use BrowserDetector\Detector\Browser\ComodoIceDragon;
use BrowserDetector\Detector\Browser\ComodoSpider;
use BrowserDetector\Detector\Browser\ContextadBot;
use BrowserDetector\Detector\Browser\CookieReportsBot;
use BrowserDetector\Detector\Browser\CoolNovo;
use BrowserDetector\Detector\Browser\CoolNovoChromePlus;
use BrowserDetector\Detector\Browser\CourseraMobileApp;
use BrowserDetector\Detector\Browser\Crawler;
use BrowserDetector\Detector\Browser\Crawler007AC9;
use BrowserDetector\Detector\Browser\Crawler4j;
use BrowserDetector\Detector\Browser\CrawlRobot;
use BrowserDetector\Detector\Browser\CrazyBrowser;
use BrowserDetector\Detector\Browser\Crazywebcrawler;
use BrowserDetector\Detector\Browser\CrowsnestMobileApp;
use BrowserDetector\Detector\Browser\Curb;
use BrowserDetector\Detector\Browser\Curl;
use BrowserDetector\Detector\Browser\Cyberduck;
use BrowserDetector\Detector\Browser\CybEye;
use BrowserDetector\Detector\Browser\Dalvik;
use BrowserDetector\Detector\Browser\Daumoa;
use BrowserDetector\Detector\Browser\DawinciAntiplagSpider;
use BrowserDetector\Detector\Browser\Dbot;
use BrowserDetector\Detector\Browser\DeepnetExplorer;
use BrowserDetector\Detector\Browser\Diffbot;
use BrowserDetector\Detector\Browser\DiggBot;
use BrowserDetector\Detector\Browser\DigincoreBot;
use BrowserDetector\Detector\Browser\Diglo;
use BrowserDetector\Detector\Browser\DiigoBrowser;
use BrowserDetector\Detector\Browser\Dillo;
use BrowserDetector\Detector\Browser\DiscoverEd;
use BrowserDetector\Detector\Browser\DiscoveryBot;
use BrowserDetector\Detector\Browser\Dispatch;
use BrowserDetector\Detector\Browser\Dolfin;
use BrowserDetector\Detector\Browser\DolphinSmalltalkHttpClient;
use BrowserDetector\Detector\Browser\DomainAppenderBot;
use BrowserDetector\Detector\Browser\DomainsBot;
use BrowserDetector\Detector\Browser\DomainScanServerMonitoring;
use BrowserDetector\Detector\Browser\DomainSigmaCrawler;
use BrowserDetector\Detector\Browser\Domnutch;
use BrowserDetector\Detector\Browser\DoradoWapBrowser;
use BrowserDetector\Detector\Browser\DotBot;
use BrowserDetector\Detector\Browser\DoubanApp;
use BrowserDetector\Detector\Browser\DownloadAccelerator;
use BrowserDetector\Detector\Browser\Dreamweaver;
use BrowserDetector\Detector\Browser\DuckDuckApp;
use BrowserDetector\Detector\Browser\DuckDuckFaviconsBot;
use BrowserDetector\Detector\Browser\DueDilCrawler;
use BrowserDetector\Detector\Browser\EasouSpider;
use BrowserDetector\Detector\Browser\EasyBibAutoCite;
use BrowserDetector\Detector\Browser\EbApp;
use BrowserDetector\Detector\Browser\Eccp;
use BrowserDetector\Detector\Browser\ElementBrowser;
use BrowserDetector\Detector\Browser\Elinks;
use BrowserDetector\Detector\Browser\ElluminateLive;
use BrowserDetector\Detector\Browser\ElmediaPlayer;
use BrowserDetector\Detector\Browser\Elmer;
use BrowserDetector\Detector\Browser\Embedly;
use BrowserDetector\Detector\Browser\EmbedPhpLibrary;
use BrowserDetector\Detector\Browser\Entireweb;
use BrowserDetector\Detector\Browser\Epiphany;
use BrowserDetector\Detector\Browser\EspialTvBrowser;
use BrowserDetector\Detector\Browser\Esribot;
use BrowserDetector\Detector\Browser\EventMachineHttpClient;
use BrowserDetector\Detector\Browser\EvernoteApp;
use BrowserDetector\Detector\Browser\EvernoteClipResolver;
use BrowserDetector\Detector\Browser\EveryoneSocialBot;
use BrowserDetector\Detector\Browser\Exabot;
use BrowserDetector\Detector\Browser\ExaleadCloudView;
use BrowserDetector\Detector\Browser\Experibot;
use BrowserDetector\Detector\Browser\ExploratodoBot;
use BrowserDetector\Detector\Browser\Ezooms;
use BrowserDetector\Detector\Browser\EzPublishLinkValidator;
use BrowserDetector\Detector\Browser\FacebookApp;
use BrowserDetector\Detector\Browser\FacebookExternalHit;
use BrowserDetector\Detector\Browser\Facebookscraper;
use BrowserDetector\Detector\Browser\FaceBot;
use BrowserDetector\Detector\Browser\Faraday;
use BrowserDetector\Detector\Browser\FastbotCrawler;
use BrowserDetector\Detector\Browser\FastBrowser;
use BrowserDetector\Detector\Browser\FastladderFeedFetcher;
use BrowserDetector\Detector\Browser\FeedBlitz;
use BrowserDetector\Detector\Browser\FeedBurner;
use BrowserDetector\Detector\Browser\FeeddlerRssReader;
use BrowserDetector\Detector\Browser\Feedly;
use BrowserDetector\Detector\Browser\FeedlyApp;
use BrowserDetector\Detector\Browser\Fennec;
use BrowserDetector\Detector\Browser\FhscanCore;
use BrowserDetector\Detector\Browser\FinderleinResearchCrawler;
use BrowserDetector\Detector\Browser\Firefox;
use BrowserDetector\Detector\Browser\FirefoxIos;
use BrowserDetector\Detector\Browser\Flipboard;
use BrowserDetector\Detector\Browser\FlipboardProxy;
use BrowserDetector\Detector\Browser\FlixsterApp;
use BrowserDetector\Detector\Browser\Flock;
use BrowserDetector\Detector\Browser\Fluid;
use BrowserDetector\Detector\Browser\FlyFlow;
use BrowserDetector\Detector\Browser\Focuseekbot;
use BrowserDetector\Detector\Browser\ForumPoster;
use BrowserDetector\Detector\Browser\FrCrawler;
use BrowserDetector\Detector\Browser\FreeWebMonitoringSiteChecker;
use BrowserDetector\Detector\Browser\Friendica;
use BrowserDetector\Detector\Browser\Galeon;
use BrowserDetector\Detector\Browser\GarlikCrawler;
use BrowserDetector\Detector\Browser\Genderanalyzer;
use BrowserDetector\Detector\Browser\Gettor;
use BrowserDetector\Detector\Browser\GgPeekBot;
use BrowserDetector\Detector\Browser\GidBot;
use BrowserDetector\Detector\Browser\GigablastOpenSource;
use BrowserDetector\Detector\Browser\GlBot;
use BrowserDetector\Detector\Browser\GoHttpClient;
use BrowserDetector\Detector\Browser\GoldfireServer;
use BrowserDetector\Detector\Browser\GomezSiteMonitor;
use BrowserDetector\Detector\Browser\GooBlog;
use BrowserDetector\Detector\Browser\GoogleAdsbotMobile;
use BrowserDetector\Detector\Browser\GoogleAdSenseBot;
use BrowserDetector\Detector\Browser\GoogleAdsenseSnapshot;
use BrowserDetector\Detector\Browser\GoogleAdwordsDisplayAdsWebRender;
use BrowserDetector\Detector\Browser\GoogleApp;
use BrowserDetector\Detector\Browser\GoogleAppEngine;
use BrowserDetector\Detector\Browser\Googlebot;
use BrowserDetector\Detector\Browser\GooglebotMobileBot;
use BrowserDetector\Detector\Browser\GoogleDesktop;
use BrowserDetector\Detector\Browser\GoogleFeedfetcher;
use BrowserDetector\Detector\Browser\GoogleHttpClientLibraryForJava;
use BrowserDetector\Detector\Browser\GoogleImageSearch;
use BrowserDetector\Detector\Browser\GoogleKeywordSuggestion;
use BrowserDetector\Detector\Browser\GooglePageSpeedInsights;
use BrowserDetector\Detector\Browser\GooglePlus;
use BrowserDetector\Detector\Browser\GoogleSiteVerification;
use BrowserDetector\Detector\Browser\GoogleStructuredDataTestingTool;
use BrowserDetector\Detector\Browser\GoogleToolbar;
use BrowserDetector\Detector\Browser\GoogleWebPreview;
use BrowserDetector\Detector\Browser\GoogleWebSnippet;
use BrowserDetector\Detector\Browser\GoogleWirelessTranscoder;
use BrowserDetector\Detector\Browser\GooseExtractor;
use BrowserDetector\Detector\Browser\GosquaredThumbnailer;
use BrowserDetector\Detector\Browser\Grammarly;
use BrowserDetector\Detector\Browser\GrapeFx;
use BrowserDetector\Detector\Browser\GrapeshotCrawler;
use BrowserDetector\Detector\Browser\GroupHighBot;
use BrowserDetector\Detector\Browser\GuzzleHttpClient;
use BrowserDetector\Detector\Browser\Gvfs;
use BrowserDetector\Detector\Browser\GwpImages;
use BrowserDetector\Detector\Browser\HatenaBookmark;
use BrowserDetector\Detector\Browser\HgghPhantomjsScreenshoter;
use BrowserDetector\Detector\Browser\HivaBot;
use BrowserDetector\Detector\Browser\HrCrawler;
use BrowserDetector\Detector\Browser\HttpClient;
use BrowserDetector\Detector\Browser\HttpKit;
use BrowserDetector\Detector\Browser\HttpRequester;
use BrowserDetector\Detector\Browser\Httrack;
use BrowserDetector\Detector\Browser\HubSpotWebcrawler;
use BrowserDetector\Detector\Browser\HyperCrawl;
use BrowserDetector\Detector\Browser\Iball;
use BrowserDetector\Detector\Browser\IbmConnections;
use BrowserDetector\Detector\Browser\IbooksAuthor;
use BrowserDetector\Detector\Browser\IBrowser;
use BrowserDetector\Detector\Browser\Icab;
use BrowserDetector\Detector\Browser\IcabMobile;
use BrowserDetector\Detector\Browser\Icarus6j;
use BrowserDetector\Detector\Browser\IccCrawler;
use BrowserDetector\Detector\Browser\Iceape;
use BrowserDetector\Detector\Browser\IceCat;
use BrowserDetector\Detector\Browser\Iceweasel;
use BrowserDetector\Detector\Browser\IchiroBot;
use BrowserDetector\Detector\Browser\IchiroMobileBot;
use BrowserDetector\Detector\Browser\IframelyBot;
use BrowserDetector\Detector\Browser\IisBot;
use BrowserDetector\Detector\Browser\ImplisenseBot;
use BrowserDetector\Detector\Browser\InagistUrlResolver;
use BrowserDetector\Detector\Browser\InfegyAtlasBot;
use BrowserDetector\Detector\Browser\InfoxWisg;
use BrowserDetector\Detector\Browser\InstagramApp;
use BrowserDetector\Detector\Browser\Installatron;
use BrowserDetector\Detector\Browser\Integrity;
use BrowserDetector\Detector\Browser\InternetArchiveSpecialArchiver;
use BrowserDetector\Detector\Browser\InternetSeer;
use BrowserDetector\Detector\Browser\IosDataaccessd;
use BrowserDetector\Detector\Browser\Ipv4Scan;
use BrowserDetector\Detector\Browser\Iridium;
use BrowserDetector\Detector\Browser\Iron;
use BrowserDetector\Detector\Browser\IscHeaderCollectorHandlers;
use BrowserDetector\Detector\Browser\IstellaBot;
use BrowserDetector\Detector\Browser\ItsScan;
use BrowserDetector\Detector\Browser\Itunes;
use BrowserDetector\Detector\Browser\Iweb;
use BrowserDetector\Detector\Browser\IzSearchBot;
use BrowserDetector\Detector\Browser\JamesBot;
use BrowserDetector\Detector\Browser\Jasmine;
use BrowserDetector\Detector\Browser\JavaStandardLibrary;
use BrowserDetector\Detector\Browser\Jeode;
use BrowserDetector\Detector\Browser\JigBrowserWeb;
use BrowserDetector\Detector\Browser\JobBoerseBot;
use BrowserDetector\Detector\Browser\JobdiggerSpider;
use BrowserDetector\Detector\Browser\JobRoboter;
use BrowserDetector\Detector\Browser\JoobleBot;
use BrowserDetector\Detector\Browser\Jupdate;
use BrowserDetector\Detector\Browser\KamelioApp;
use BrowserDetector\Detector\Browser\Kazehakase;
use BrowserDetector\Detector\Browser\Kenshoo;
use BrowserDetector\Detector\Browser\Kgbody;
use BrowserDetector\Detector\Browser\Kinza;
use BrowserDetector\Detector\Browser\Kizasispider;
use BrowserDetector\Detector\Browser\Kkman;
use BrowserDetector\Detector\Browser\Kmail2;
use BrowserDetector\Detector\Browser\Kmeleon;
use BrowserDetector\Detector\Browser\KomodiaBot;
use BrowserDetector\Detector\Browser\Konqueror;
use BrowserDetector\Detector\Browser\Kontact;
use BrowserDetector\Detector\Browser\Kraken;
use BrowserDetector\Detector\Browser\Krakenjs;
use BrowserDetector\Detector\Browser\Kulturarw3;
use BrowserDetector\Detector\Browser\Larbin;
use BrowserDetector\Detector\Browser\Lbot;
use BrowserDetector\Detector\Browser\Libcurl;
use BrowserDetector\Detector\Browser\LibreOffice;
use BrowserDetector\Detector\Browser\Libwww;
use BrowserDetector\Detector\Browser\Liebao;
use BrowserDetector\Detector\Browser\LightspeedSystemsCrawler;
use BrowserDetector\Detector\Browser\LightspeedSystemsRocketCrawler;
use BrowserDetector\Detector\Browser\LinkCheck;
use BrowserDetector\Detector\Browser\LinkdexBot;
use BrowserDetector\Detector\Browser\LinkedInBot;
use BrowserDetector\Detector\Browser\LinkpadBot;
use BrowserDetector\Detector\Browser\Links;
use BrowserDetector\Detector\Browser\LinksCrawler;
use BrowserDetector\Detector\Browser\LinkStatsBot;
use BrowserDetector\Detector\Browser\LinkThumbnailer;
use BrowserDetector\Detector\Browser\LipperheyKausAustralis;
use BrowserDetector\Detector\Browser\LipperheySeoService;
use BrowserDetector\Detector\Browser\LivedoorFeedFetcher;
use BrowserDetector\Detector\Browser\LivelapBot;
use BrowserDetector\Detector\Browser\LoadTimeBot;
use BrowserDetector\Detector\Browser\Locubot;
use BrowserDetector\Detector\Browser\LongUrlBot;
use BrowserDetector\Detector\Browser\LotusNotes;
use BrowserDetector\Detector\Browser\Ltx71;
use BrowserDetector\Detector\Browser\Luakit;
use BrowserDetector\Detector\Browser\LucidworksBot;
use BrowserDetector\Detector\Browser\Lunascape;
use BrowserDetector\Detector\Browser\Lynx;
use BrowserDetector\Detector\Browser\MacAppStore;
use BrowserDetector\Detector\Browser\MagpieRss;
use BrowserDetector\Detector\Browser\MailBar;
use BrowserDetector\Detector\Browser\MailChimp;
use BrowserDetector\Detector\Browser\MailRu;
use BrowserDetector\Detector\Browser\MarketingGrader;
use BrowserDetector\Detector\Browser\MarketwireBot;
use BrowserDetector\Detector\Browser\MauiWapBrowser;
use BrowserDetector\Detector\Browser\Maxthon;
use BrowserDetector\Detector\Browser\MaxthonNitro;
use BrowserDetector\Detector\Browser\Mbot;
use BrowserDetector\Detector\Browser\MeanpathBot;
use BrowserDetector\Detector\Browser\MegaIndexBot;
use BrowserDetector\Detector\Browser\MelvilBot;
use BrowserDetector\Detector\Browser\MelvilFaviconBot;
use BrowserDetector\Detector\Browser\MemoryBot;
use BrowserDetector\Detector\Browser\MerchantCentricBot;
use BrowserDetector\Detector\Browser\Mercury;
use BrowserDetector\Detector\Browser\MetaGeneratorCrawler;
use BrowserDetector\Detector\Browser\Metager2VerificationBot;
use BrowserDetector\Detector\Browser\MetaHeadersBot;
use BrowserDetector\Detector\Browser\MetaInspector;
use BrowserDetector\Detector\Browser\MetaJobBot;
use BrowserDetector\Detector\Browser\MetaUri;
use BrowserDetector\Detector\Browser\MicroB;
use BrowserDetector\Detector\Browser\MicrosoftAccess;
use BrowserDetector\Detector\Browser\MicrosoftCryptoApi;
use BrowserDetector\Detector\Browser\MicrosoftDotNetFrameworkClr;
use BrowserDetector\Detector\Browser\MicrosoftEdge;
use BrowserDetector\Detector\Browser\MicrosoftEdgeMobile;
use BrowserDetector\Detector\Browser\MicrosoftExcel;
use BrowserDetector\Detector\Browser\MicrosoftFrontPage;
use BrowserDetector\Detector\Browser\MicrosoftInternetExplorer;
use BrowserDetector\Detector\Browser\MicrosoftLync;
use BrowserDetector\Detector\Browser\MicrosoftMobileExplorer;
use BrowserDetector\Detector\Browser\MicrosoftOffice;
use BrowserDetector\Detector\Browser\MicrosoftOfficeProtocolDiscovery;
use BrowserDetector\Detector\Browser\MicrosoftOfficeSyncProc;
use BrowserDetector\Detector\Browser\MicrosoftOfficeUploadCenter;
use BrowserDetector\Detector\Browser\MicrosoftOneNote;
use BrowserDetector\Detector\Browser\MicrosoftOutlook;
use BrowserDetector\Detector\Browser\MicrosoftPowerPoint;
use BrowserDetector\Detector\Browser\MicrosoftVisio;
use BrowserDetector\Detector\Browser\MicrosoftWebDav;
use BrowserDetector\Detector\Browser\MicrosoftWord;
use BrowserDetector\Detector\Browser\Midori;
use BrowserDetector\Detector\Browser\MignifyBot;
use BrowserDetector\Detector\Browser\Minimo;
use BrowserDetector\Detector\Browser\MiuiBrowser;
use BrowserDetector\Detector\Browser\MixBot;
use BrowserDetector\Detector\Browser\MixrankBot;
use BrowserDetector\Detector\Browser\Mj12bot;
use BrowserDetector\Detector\Browser\MnogoSearch;
use BrowserDetector\Detector\Browser\MobileSafariUiWebView;
use BrowserDetector\Detector\Browser\ModelsBrowser;
use BrowserDetector\Detector\Browser\MojeekBot;
use BrowserDetector\Detector\Browser\MonoBot;
use BrowserDetector\Detector\Browser\Moozilla;
use BrowserDetector\Detector\Browser\Moreover;
use BrowserDetector\Detector\Browser\MosBookmarks;
use BrowserDetector\Detector\Browser\MosBookmarksLinkChecker;
use BrowserDetector\Detector\Browser\MotorolaInternetBrowser;
use BrowserDetector\Detector\Browser\MozillaCrawler;
use BrowserDetector\Detector\Browser\MsnBotMedia;
use BrowserDetector\Detector\Browser\MultiZilla;
use BrowserDetector\Detector\Browser\MyInternetBrowser;
use BrowserDetector\Detector\Browser\Nagios;
use BrowserDetector\Detector\Browser\NaverBot;
use BrowserDetector\Detector\Browser\NaverMatome;
use BrowserDetector\Detector\Browser\Nbot;
use BrowserDetector\Detector\Browser\NerdyBot;
use BrowserDetector\Detector\Browser\NetEstateCrawler;
use BrowserDetector\Detector\Browser\NetFront;
use BrowserDetector\Detector\Browser\NetFrontLifeBrowser;
use BrowserDetector\Detector\Browser\NetFrontNx;
use BrowserDetector\Detector\Browser\NetLyzerFastProbe;
use BrowserDetector\Detector\Browser\Netscape;
use BrowserDetector\Detector\Browser\NetscapeNavigator;
use BrowserDetector\Detector\Browser\NetseerCrawler;
use BrowserDetector\Detector\Browser\NettioBot;
use BrowserDetector\Detector\Browser\NetzCheckBot;
use BrowserDetector\Detector\Browser\NewsBlurFeedFetcher;
use BrowserDetector\Detector\Browser\NewsFire;
use BrowserDetector\Detector\Browser\NewsMe;
use BrowserDetector\Detector\Browser\Newspaper;
use BrowserDetector\Detector\Browser\Nichrome;
use BrowserDetector\Detector\Browser\NikiBot;
use BrowserDetector\Detector\Browser\NineConnections;
use BrowserDetector\Detector\Browser\Ning;
use BrowserDetector\Detector\Browser\NodeFetch;
use BrowserDetector\Detector\Browser\NokiaBrowser;
use BrowserDetector\Detector\Browser\NokiaProxyBrowser;
use BrowserDetector\Detector\Browser\NoteTextView;
use BrowserDetector\Detector\Browser\Nutch;
use BrowserDetector\Detector\Browser\ObigoQ;
use BrowserDetector\Detector\Browser\Obot;
use BrowserDetector\Detector\Browser\OktaMobileApp;
use BrowserDetector\Detector\Browser\Omniweb;
use BrowserDetector\Detector\Browser\OneBrowser;
use BrowserDetector\Detector\Browser\OpenBsdFtp;
use BrowserDetector\Detector\Browser\OpenHoseBot;
use BrowserDetector\Detector\Browser\OpenOffice;
use BrowserDetector\Detector\Browser\OpenVulnerabilityAssessmentSystem;
use BrowserDetector\Detector\Browser\Openwave;
use BrowserDetector\Detector\Browser\OpenWebkitSharp;
use BrowserDetector\Detector\Browser\OpenWebSpider;
use BrowserDetector\Detector\Browser\Opera;
use BrowserDetector\Detector\Browser\OperaCoast;
use BrowserDetector\Detector\Browser\OperaMini;
use BrowserDetector\Detector\Browser\OperaMobile;
use BrowserDetector\Detector\Browser\OptimizerBot;
use BrowserDetector\Detector\Browser\OptivoNetHelper;
use BrowserDetector\Detector\Browser\Orangebot;
use BrowserDetector\Detector\Browser\Otter;
use BrowserDetector\Detector\Browser\OwaspSecretBrowser;
use BrowserDetector\Detector\Browser\OwlerBot;
use BrowserDetector\Detector\Browser\PadBot;
use BrowserDetector\Detector\Browser\PageFreezer;
use BrowserDetector\Detector\Browser\PagePeeker;
use BrowserDetector\Detector\Browser\PagePeekerScreenshotMaker;
use BrowserDetector\Detector\Browser\PagesInventoryBot;
use BrowserDetector\Detector\Browser\Palemoon;
use BrowserDetector\Detector\Browser\PaperLiBot;
use BrowserDetector\Detector\Browser\PdrlabsBot;
use BrowserDetector\Detector\Browser\PearltreesBot;
use BrowserDetector\Detector\Browser\PeeploScreenshotBot;
use BrowserDetector\Detector\Browser\PerfectBrowser;
use BrowserDetector\Detector\Browser\Phantomas;
use BrowserDetector\Detector\Browser\PhantomBrowser;
use BrowserDetector\Detector\Browser\PhantomJs;
use BrowserDetector\Detector\Browser\PhantomJsBot;
use BrowserDetector\Detector\Browser\Photon;
use BrowserDetector\Detector\Browser\Php;
use BrowserDetector\Detector\Browser\PicmoleBot;
use BrowserDetector\Detector\Browser\Picsearchbot;
use BrowserDetector\Detector\Browser\Pingdom;
use BrowserDetector\Detector\Browser\PinterestApp;
use BrowserDetector\Detector\Browser\PiplBot;
use BrowserDetector\Detector\Browser\Please200Bot;
use BrowserDetector\Detector\Browser\Plus5Bot;
use BrowserDetector\Detector\Browser\PmozinfoOdpLinkChecker;
use BrowserDetector\Detector\Browser\Polaris;
use BrowserDetector\Detector\Browser\PostRank;
use BrowserDetector\Detector\Browser\Powermarks;
use BrowserDetector\Detector\Browser\Prince;
use BrowserDetector\Detector\Browser\PrismaticApp;
use BrowserDetector\Detector\Browser\Prlog;
use BrowserDetector\Detector\Browser\Profiller;
use BrowserDetector\Detector\Browser\Proximic;
use BrowserDetector\Detector\Browser\ProxyGearPro;
use BrowserDetector\Detector\Browser\PubCrawler;
use BrowserDetector\Detector\Browser\PublicLibraryArchive;
use BrowserDetector\Detector\Browser\Puffin;
use BrowserDetector\Detector\Browser\PwBot;
use BrowserDetector\Detector\Browser\PyCurl;
use BrowserDetector\Detector\Browser\PythonRequests;
use BrowserDetector\Detector\Browser\PythonUrlLib;
use BrowserDetector\Detector\Browser\QqBrowser;
use BrowserDetector\Detector\Browser\QqBrowserMini;
use BrowserDetector\Detector\Browser\Qt;
use BrowserDetector\Detector\Browser\QualidatorBot;
use BrowserDetector\Detector\Browser\QuickiWikiBot;
use BrowserDetector\Detector\Browser\QuickLook;
use BrowserDetector\Detector\Browser\QuoraApp;
use BrowserDetector\Detector\Browser\QuoraLinkPreviewBot;
use BrowserDetector\Detector\Browser\QupZilla;
use BrowserDetector\Detector\Browser\QuteBrowser;
use BrowserDetector\Detector\Browser\Qwantify;
use BrowserDetector\Detector\Browser\QwordBrowser;
use BrowserDetector\Detector\Browser\R6CommentReader;
use BrowserDetector\Detector\Browser\R6Feedfetcher;
use BrowserDetector\Detector\Browser\RamblerMail;
use BrowserDetector\Detector\Browser\RankFlex;
use BrowserDetector\Detector\Browser\RavenLinkChecker;
use BrowserDetector\Detector\Browser\Readability;
use BrowserDetector\Detector\Browser\RebelMouse;
use BrowserDetector\Detector\Browser\Redbot;
use BrowserDetector\Detector\Browser\RedditPicScraper;
use BrowserDetector\Detector\Browser\Reeder;
use BrowserDetector\Detector\Browser\Rekonq;
use BrowserDetector\Detector\Browser\Restify;
use BrowserDetector\Detector\Browser\RevIpSnfoSiteAnalyzer;
use BrowserDetector\Detector\Browser\Riddler;
use BrowserDetector\Detector\Browser\RivalIqBot;
use BrowserDetector\Detector\Browser\RmSnapKit;
use BrowserDetector\Detector\Browser\Rockmelt;
use BrowserDetector\Detector\Browser\RockyChatWorkMobile;
use BrowserDetector\Detector\Browser\Rogerbot;
use BrowserDetector\Detector\Browser\RokuDvp;
use BrowserDetector\Detector\Browser\RorSitemapGenerator;
use BrowserDetector\Detector\Browser\Rss2Html;
use BrowserDetector\Detector\Browser\Ruby;
use BrowserDetector\Detector\Browser\Safari;
use BrowserDetector\Detector\Browser\Safeassign;
use BrowserDetector\Detector\Browser\SafeSearchMicrodataCrawler;
use BrowserDetector\Detector\Browser\SailfishBrowser;
use BrowserDetector\Detector\Browser\SalesForceApp;
use BrowserDetector\Detector\Browser\SamsungBrowser;
use BrowserDetector\Detector\Browser\SamsungWebView;
use BrowserDetector\Detector\Browser\Sandvox;
use BrowserDetector\Detector\Browser\SchoolwiresApp;
use BrowserDetector\Detector\Browser\ScopiaCrawler;
use BrowserDetector\Detector\Browser\Scoutjet;
use BrowserDetector\Detector\Browser\ScrapyBot;
use BrowserDetector\Detector\Browser\ScreamingFrogSeoSpider;
use BrowserDetector\Detector\Browser\ScreenerBot;
use BrowserDetector\Detector\Browser\ScreenshotBot;
use BrowserDetector\Detector\Browser\Scrubby;
use BrowserDetector\Detector\Browser\Seamonkey;
use BrowserDetector\Detector\Browser\SearchteqBot;
use BrowserDetector\Detector\Browser\SecondLiveClient;
use BrowserDetector\Detector\Browser\SecondLiveCommerceClient;
use BrowserDetector\Detector\Browser\SecureBrowser360;
use BrowserDetector\Detector\Browser\SecurepointContentFilter;
use BrowserDetector\Detector\Browser\SeeBot;
use BrowserDetector\Detector\Browser\SemanticBot;
use BrowserDetector\Detector\Browser\SemanticVisionsCrawler;
use BrowserDetector\Detector\Browser\SemrushBot;
use BrowserDetector\Detector\Browser\SeoDiver;
use BrowserDetector\Detector\Browser\Seokicks;
use BrowserDetector\Detector\Browser\Seoprofiler;
use BrowserDetector\Detector\Browser\SeoStats;
use BrowserDetector\Detector\Browser\SetLinksCrawler;
use BrowserDetector\Detector\Browser\SeznamBot;
use BrowserDetector\Detector\Browser\SeznamBrowser;
use BrowserDetector\Detector\Browser\SeznamScreenshotGenerator;
use BrowserDetector\Detector\Browser\Sharp;
use BrowserDetector\Detector\Browser\ShortLinkTranslate;
use BrowserDetector\Detector\Browser\ShortUrlChecker;
use BrowserDetector\Detector\Browser\ShowyouBot;
use BrowserDetector\Detector\Browser\Shrook;
use BrowserDetector\Detector\Browser\Silk;
use BrowserDetector\Detector\Browser\SimplePie;
use BrowserDetector\Detector\Browser\Sistrix;
use BrowserDetector\Detector\Browser\SiteCon;
use BrowserDetector\Detector\Browser\SiteExplorer;
use BrowserDetector\Detector\Browser\Skyfire;
use BrowserDetector\Detector\Browser\SkypeUriPreview;
use BrowserDetector\Detector\Browser\Slackbot;
use BrowserDetector\Detector\Browser\SlackbotLinkExpanding;
use BrowserDetector\Detector\Browser\Sleipnir;
use BrowserDetector\Detector\Browser\SlimerJs;
use BrowserDetector\Detector\Browser\SmartsiteHttpClient;
use BrowserDetector\Detector\Browser\SmartViera;
use BrowserDetector\Detector\Browser\SmrfUrlExpander;
use BrowserDetector\Detector\Browser\SmtBot;
use BrowserDetector\Detector\Browser\SnkScreenshotBot;
use BrowserDetector\Detector\Browser\Socialradarbot;
use BrowserDetector\Detector\Browser\SoftListBot;
use BrowserDetector\Detector\Browser\SogouExplorer;
use BrowserDetector\Detector\Browser\SogouSpider;
use BrowserDetector\Detector\Browser\SogouWebSpider;
use BrowserDetector\Detector\Browser\SonyEricsson;
use BrowserDetector\Detector\Browser\SophoraLinkchecker;
use BrowserDetector\Detector\Browser\SophosAgent;
use BrowserDetector\Detector\Browser\SophosUpdateManager;
use BrowserDetector\Detector\Browser\SoundCloudApp;
use BrowserDetector\Detector\Browser\SpeedBrowser360;
use BrowserDetector\Detector\Browser\Spinn3rRssAggregator;
use BrowserDetector\Detector\Browser\Spip;
use BrowserDetector\Detector\Browser\SprinklrBot;
use BrowserDetector\Detector\Browser\Squzer;
use BrowserDetector\Detector\Browser\SreleaseBot;
use BrowserDetector\Detector\Browser\SsearchCrawler;
use BrowserDetector\Detector\Browser\Stagefright;
use BrowserDetector\Detector\Browser\Steeler;
use BrowserDetector\Detector\Browser\StratagemsKumo;
use BrowserDetector\Detector\Browser\Superagent;
use BrowserDetector\Detector\Browser\SuperaramaComBot;
use BrowserDetector\Detector\Browser\SuperBird;
use BrowserDetector\Detector\Browser\SuperfeedrBot;
use BrowserDetector\Detector\Browser\SurveyBot;
use BrowserDetector\Detector\Browser\SvvenSummarizerBot;
use BrowserDetector\Detector\Browser\SymfonyRssReader;
use BrowserDetector\Detector\Browser\SynHttpClient;
use BrowserDetector\Detector\Browser\TaprootBot;
use BrowserDetector\Detector\Browser\TelecaObigo;
use BrowserDetector\Detector\Browser\TestCertificateInfo;
use BrowserDetector\Detector\Browser\TestCrawler;
use BrowserDetector\Detector\Browser\TexisWebscript;
use BrowserDetector\Detector\Browser\TheOldReader;
use BrowserDetector\Detector\Browser\ThumbnailAgent;
use BrowserDetector\Detector\Browser\Thumbor;
use BrowserDetector\Detector\Browser\ThumbShotsDeBot;
use BrowserDetector\Detector\Browser\ThumbSniper;
use BrowserDetector\Detector\Browser\Thunderbird;
use BrowserDetector\Detector\Browser\TinEyeBot;
use BrowserDetector\Detector\Browser\TinyBrowser;
use BrowserDetector\Detector\Browser\TinyTinyRss;
use BrowserDetector\Detector\Browser\TonlineBrowser;
use BrowserDetector\Detector\Browser\Traackr;
use BrowserDetector\Detector\Browser\TrendWinHttp;
use BrowserDetector\Detector\Browser\TroveBot;
use BrowserDetector\Detector\Browser\TubeTv;
use BrowserDetector\Detector\Browser\TumblrApp;
use BrowserDetector\Detector\Browser\TwcSportsNet;
use BrowserDetector\Detector\Browser\TweetedTimesBot;
use BrowserDetector\Detector\Browser\TweetmemeBot;
use BrowserDetector\Detector\Browser\TweetminsterBot;
use BrowserDetector\Detector\Browser\TwikleBot;
use BrowserDetector\Detector\Browser\TwinglyRecon;
use BrowserDetector\Detector\Browser\TwitterApp;
use BrowserDetector\Detector\Browser\Twitterbot;
use BrowserDetector\Detector\Browser\Typhoeus;
use BrowserDetector\Detector\Browser\Typo3Linkvalidator;
use BrowserDetector\Detector\Browser\UcBrowser;
use BrowserDetector\Detector\Browser\UcBrowserHd;
use BrowserDetector\Detector\Browser\Uipbot;
use BrowserDetector\Detector\Browser\UmBot;
use BrowserDetector\Detector\Browser\Unisterbot;
use BrowserDetector\Detector\Browser\UnisterTesting;
use BrowserDetector\Detector\Browser\UnityWebPlayer;
use BrowserDetector\Detector\Browser\UniventionCorporateServer;
use BrowserDetector\Detector\Browser\UniversalFeedParser;
use BrowserDetector\Detector\Browser\UnknownBrowser;
use BrowserDetector\Detector\Browser\UnwindFetchor;
use BrowserDetector\Detector\Browser\UrlAppendBot;
use BrowserDetector\Detector\Browser\UrlChecker;
use BrowserDetector\Detector\Browser\UrlfilterDbCrawler;
use BrowserDetector\Detector\Browser\UrlGrabber;
use BrowserDetector\Detector\Browser\Vagabondo;
use BrowserDetector\Detector\Browser\VbulletinSeoBot;
use BrowserDetector\Detector\Browser\ViralvideochartBot;
use BrowserDetector\Detector\Browser\Virtuoso;
use BrowserDetector\Detector\Browser\VisionUtils;
use BrowserDetector\Detector\Browser\Vivaldi;
use BrowserDetector\Detector\Browser\VkShare;
use BrowserDetector\Detector\Browser\VlcMediaPlayer;
use BrowserDetector\Detector\Browser\VocusBot;
use BrowserDetector\Detector\Browser\Vsentry;
use BrowserDetector\Detector\Browser\W3cI18nChecker;
use BrowserDetector\Detector\Browser\W3cUnicorn;
use BrowserDetector\Detector\Browser\W3cValidatorNuLv;
use BrowserDetector\Detector\Browser\WadavnSearchBot;
use BrowserDetector\Detector\Browser\WapBrowser;
use BrowserDetector\Detector\Browser\WasaLiveBot;
use BrowserDetector\Detector\Browser\WaterFox;
use BrowserDetector\Detector\Browser\WaybackArchive;
use BrowserDetector\Detector\Browser\WbSearchBot;
use BrowserDetector\Detector\Browser\WdgHtmlValidator;
use BrowserDetector\Detector\Browser\WebceoBot;
use BrowserDetector\Detector\Browser\WebClip;
use BrowserDetector\Detector\Browser\WebCorp;
use BrowserDetector\Detector\Browser\WebdeMailCheck;
use BrowserDetector\Detector\Browser\WebGlance;
use BrowserDetector\Detector\Browser\WebIndex;
use BrowserDetector\Detector\Browser\WebkitWebos;
use BrowserDetector\Detector\Browser\WebMasterAid;
use BrowserDetector\Detector\Browser\WebmasterCoffee;
use BrowserDetector\Detector\Browser\WebmasterTipsBot;
use BrowserDetector\Detector\Browser\WebnumbrFetcher;
use BrowserDetector\Detector\Browser\WebRingChecker;
use BrowserDetector\Detector\Browser\WebsiteExplorer;
use BrowserDetector\Detector\Browser\WebsiteThumbnailGenerator;
use BrowserDetector\Detector\Browser\WebTarantula;
use BrowserDetector\Detector\Browser\WebThumb;
use BrowserDetector\Detector\Browser\WeChatApp;
use BrowserDetector\Detector\Browser\WerbefreieDeutscheSuchmaschine;
use BrowserDetector\Detector\Browser\WeseeAds;
use BrowserDetector\Detector\Browser\WeseeSearch;
use BrowserDetector\Detector\Browser\WeTabBrowser;
use BrowserDetector\Detector\Browser\Wget;
use BrowserDetector\Detector\Browser\WhatsApp;
use BrowserDetector\Detector\Browser\WhatWebWebScanner;
use BrowserDetector\Detector\Browser\WhiteHatAviator;
use BrowserDetector\Detector\Browser\WindowsLiveMail;
use BrowserDetector\Detector\Browser\WindowsMediaPlayer;
use BrowserDetector\Detector\Browser\WindowsPhoneSearch;
use BrowserDetector\Detector\Browser\WindowsRssPlatform;
use BrowserDetector\Detector\Browser\WindowsUpdateAgent;
use BrowserDetector\Detector\Browser\WinHttpRequest;
use BrowserDetector\Detector\Browser\WireApp;
use BrowserDetector\Detector\Browser\WiseNutSearchEngineCrawler;
use BrowserDetector\Detector\Browser\WkBrowser;
use BrowserDetector\Detector\Browser\WkHtmltoImage;
use BrowserDetector\Detector\Browser\WkHtmltopdf;
use BrowserDetector\Detector\Browser\Wnmbot;
use BrowserDetector\Detector\Browser\WooRank;
use BrowserDetector\Detector\Browser\WordPress;
use BrowserDetector\Detector\Browser\WordPressApp;
use BrowserDetector\Detector\Browser\Woriobot;
use BrowserDetector\Detector\Browser\WorldwebheritageBot;
use BrowserDetector\Detector\Browser\WscheckBot;
use BrowserDetector\Detector\Browser\WsrAgent;
use BrowserDetector\Detector\Browser\XenusLinkSleuth;
use BrowserDetector\Detector\Browser\XingContenttabreceiver;
use BrowserDetector\Detector\Browser\XmlSitemapGenerator;
use BrowserDetector\Detector\Browser\XmlSitemapsGenerator;
use BrowserDetector\Detector\Browser\XoviBot;
use BrowserDetector\Detector\Browser\YaBrowser;
use BrowserDetector\Detector\Browser\YahooAdMonitoring;
use BrowserDetector\Detector\Browser\YahooApp;
use BrowserDetector\Detector\Browser\YahooCacheSystem;
use BrowserDetector\Detector\Browser\YahooJapan;
use BrowserDetector\Detector\Browser\YahooLinkPreview;
use BrowserDetector\Detector\Browser\YahooMobileApp;
use BrowserDetector\Detector\Browser\YahooSlingstone;
use BrowserDetector\Detector\Browser\YahooSlurp;
use BrowserDetector\Detector\Browser\YandexBot;
use BrowserDetector\Detector\Browser\YioopBot;
use BrowserDetector\Detector\Browser\YisouSpider;
use BrowserDetector\Detector\Browser\YoozBot;
use BrowserDetector\Detector\Browser\Yourls;
use BrowserDetector\Detector\Browser\ZendHttpClient;
use BrowserDetector\Detector\Browser\ZetakeyBrowser;
use BrowserDetector\Detector\Browser\Zitebot;
use BrowserDetector\Detector\Browser\ZmEu;
use BrowserDetector\Detector\Browser\ZnajdzFotoImageBot;
use BrowserDetector\Detector\Browser\ZollardWorm;
use BrowserDetector\Detector\Browser\Zookabot;
use BrowserDetector\Detector\Browser\ZumBot;
use UaResult\Os\OsInterface;

/**
 * Browser detection class
 *
 * @category  BrowserDetector
 *
 * @author    Thomas Mueller <t_mueller_stolzenhain@yahoo.de>
 * @copyright 2012-2015 Thomas Mueller
 * @license   http://www.opensource.org/licenses/MIT MIT License
 */
class BrowserFactory implements FactoryInterface
{
    /**
     * Gets the information about the rendering engine by User Agent
     *
     * @param string                   $agent
     * @param \UaResult\Os\OsInterface $platform
     *
     * @return \BrowserDetector\Detector\Browser\AbstractBrowser
     */
    public static function detect(
        $agent,
        OsInterface $platform = null
    ) {
        if (preg_match('/RevIP\.info site analyzer/', $agent)) {
            $browser = new RevIpSnfoSiteAnalyzer($agent, []);
        } elseif (preg_match('/reddit pic scraper/i', $agent)) {
            $browser = new RedditPicScraper($agent, []);
        } elseif (preg_match('/Mozilla crawl/', $agent)) {
            $browser = new MozillaCrawler($agent, []);
        } elseif (preg_match('/^\[FBAN/i', $agent)) {
            $browser = new FacebookApp($agent, []);
        } elseif (preg_match('/UCBrowserHD/', $agent)) {
            $browser = new UcBrowserHd($agent, []);
        } elseif (preg_match('/(ucbrowser|uc browser|ucweb)/i', $agent) && preg_match('/opera mini/i', $agent)) {
            $browser = new UcBrowser($agent, []);
        } elseif (preg_match('/(opera mini|opios)/i', $agent)) {
            $browser = new OperaMini($agent, []);
        } elseif (preg_match('/opera mobi/i', $agent)
            || (preg_match('/(opera|opr)/i', $agent) && preg_match('/(Android|MTK|MAUI|SAMSUNG|Windows CE|SymbOS)/', $agent))
        ) {
            $browser = new OperaMobile($agent, []);
        } elseif (preg_match('/(ucbrowser|uc browser|ucweb)/i', $agent)) {
            $browser = new UcBrowser($agent, []);
        } elseif (preg_match('/IC OpenGraph Crawler/', $agent)) {
            $browser = new IbmConnections($agent, []);
        } elseif (preg_match('/coast/i', $agent)) {
            $browser = new OperaCoast($agent, []);
        } elseif (preg_match('/(opera|opr)/i', $agent)) {
            $browser = new Opera($agent, []);
        } elseif (preg_match('/iCabMobile/', $agent)) {
            $browser = new IcabMobile($agent, []);
        } elseif (preg_match('/iCab/', $agent)) {
            $browser = new Icab($agent, []);
        } elseif (preg_match('/HggH PhantomJS Screenshoter/', $agent)) {
            $browser = new HgghPhantomjsScreenshoter($agent, []);
        } elseif (preg_match('/bl\.uk\_lddc\_bot/', $agent)) {
            $browser = new BlukLddcBot($agent, []);
        } elseif (preg_match('/phantomas/', $agent)) {
            $browser = new Phantomas($agent, []);
        } elseif (preg_match('/Seznam screenshot\-generator/', $agent)) {
            $browser = new SeznamScreenshotGenerator($agent, []);
        } elseif (false !== strpos($agent, 'PhantomJS')) {
            $browser = new PhantomJs($agent, []);
        } elseif (false !== strpos($agent, 'YaBrowser')) {
            $browser = new YaBrowser($agent, []);
        } elseif (false !== strpos($agent, 'Kamelio')) {
            $browser = new KamelioApp($agent, []);
        } elseif (false !== strpos($agent, 'FBAV')) {
            $browser = new FacebookApp($agent, []);
        } elseif (false !== strpos($agent, 'ACHEETAHI')) {
            $browser = new CmBrowser($agent, []);
        } elseif (preg_match('/flyflow/i', $agent)) {
            $browser = new FlyFlow($agent, []);
        } elseif (false !== strpos($agent, 'bdbrowser_i18n') || false !== strpos($agent, 'baidubrowser')) {
            $browser = new BaiduBrowser($agent, []);
        } elseif (false !== strpos($agent, 'bdbrowserhd_i18n')) {
            $browser = new BaiduHdBrowser($agent, []);
        } elseif (false !== strpos($agent, 'bdbrowser_mini')) {
            $browser = new BaiduMiniBrowser($agent, []);
        } elseif (false !== strpos($agent, 'Puffin')) {
            $browser = new Puffin($agent, []);
        } elseif (preg_match('/stagefright/', $agent)) {
            $browser = new Stagefright($agent, []);
        } elseif (false !== strpos($agent, 'SamsungBrowser')) {
            $browser = new SamsungBrowser($agent, []);
        } elseif (false !== strpos($agent, 'Silk')) {
            $browser = new Silk($agent, []);
        } elseif (false !== strpos($agent, 'coc_coc_browser')) {
            $browser = new CocCocBrowser($agent, []);
        } elseif (false !== strpos($agent, 'NaverMatome')) {
            $browser = new NaverMatome($agent, []);
        } elseif (preg_match('/FlipboardProxy/', $agent)) {
            $browser = new FlipboardProxy($agent, []);
        } elseif (false !== strpos($agent, 'Flipboard')) {
            $browser = new Flipboard($agent, []);
        } elseif (false !== strpos($agent, 'Seznam.cz')) {
            $browser = new SeznamBrowser($agent, []);
        } elseif (false !== strpos($agent, 'Aviator')) {
            $browser = new WhiteHatAviator($agent, []);
        } elseif (preg_match('/NetFrontLifeBrowser/', $agent)) {
            $browser = new NetFrontLifeBrowser($agent, []);
        } elseif (preg_match('/IceDragon/', $agent)) {
            $browser = new ComodoIceDragon($agent, []);
        } elseif (false !== strpos($agent, 'Dragon') && false === strpos($agent, 'DragonFly')) {
            $browser = new ComodoDragon($agent, []);
        } elseif (false !== strpos($agent, 'Beamrise')) {
            $browser = new Beamrise($agent, []);
        } elseif (false !== strpos($agent, 'Diglo')) {
            $browser = new Diglo($agent, []);
        } elseif (false !== strpos($agent, 'APUSBrowser')) {
            $browser = new ApusBrowser($agent, []);
        } elseif (false !== strpos($agent, 'Chedot')) {
            $browser = new Chedot($agent, []);
        } elseif (false !== strpos($agent, 'Qword')) {
            $browser = new QwordBrowser($agent, []);
        } elseif (false !== strpos($agent, 'Iridium')) {
            $browser = new Iridium($agent, []);
        } elseif (preg_match('/avant/i', $agent)) {
            $browser = new Avant($agent, []);
        } elseif (false !== strpos($agent, 'MxNitro')) {
            $browser = new MaxthonNitro($agent, []);
        } elseif (preg_match('/(mxbrowser|maxthon|myie)/i', $agent)) {
            $browser = new Maxthon($agent, []);
        } elseif (preg_match('/superbird/i', $agent)) {
            $browser = new SuperBird($agent, []);
        } elseif (false !== strpos($agent, 'TinyBrowser')) {
            $browser = new TinyBrowser($agent, []);
        } elseif (preg_match('/MicroMessenger/', $agent)) {
            $browser = new WeChatApp($agent, []);
        } elseif (preg_match('/MQQBrowser\/Mini/', $agent)) {
            $browser = new QqBrowserMini($agent, []);
        } elseif (preg_match('/MQQBrowser/', $agent)) {
            $browser = new QqBrowser($agent, []);
        } elseif (preg_match('/pinterest/i', $agent)) {
            $browser = new PinterestApp($agent, []);
        } elseif (preg_match('/baiduboxapp/', $agent)) {
            $browser = new BaiduBoxApp($agent, []);
        } elseif (preg_match('/wkbrowser/', $agent)) {
            $browser = new WkBrowser($agent, []);
        } elseif (preg_match('/Mb2345Browser/', $agent)) {
            $browser = new Browser2345($agent, []);
        } elseif (false !== strpos($agent, 'Chrome')
            && false !== strpos($agent, 'Version')
            && 0 < strpos($agent, 'Chrome')
        ) {
            $browser = new AndroidWebView($agent, []);
        } elseif (false !== strpos($agent, 'Safari')
            && false !== strpos($agent, 'Version')
            && false !== strpos($agent, 'Tizen')
        ) {
            $browser = new SamsungWebView($agent, []);
        } elseif (preg_match('/cybeye/i', $agent)) {
            $browser = new CybEye($agent, []);
        } elseif (preg_match('/RebelMouse/', $agent)) {
            $browser = new RebelMouse($agent, []);
        } elseif (preg_match('/SeaMonkey/', $agent)) {
            $browser = new Seamonkey($agent, []);
        } elseif (preg_match('/Jobboerse/', $agent)) {
            $browser = new JobBoerseBot($agent, []);
        } elseif (preg_match('/Navigator/', $agent)) {
            $browser = new NetscapeNavigator($agent, []);
        } elseif (preg_match('/firefox/i', $agent) && preg_match('/anonym/i', $agent)) {
            $browser = new Firefox($agent, []);
        } elseif (preg_match('/trident/i', $agent) && preg_match('/anonym/i', $agent)) {
            $browser = new MicrosoftInternetExplorer($agent, []);
        } elseif (preg_match('/Windows\-RSS\-Platform/', $agent)) {
            $browser = new WindowsRssPlatform($agent, []);
        } elseif (preg_match('/MarketwireBot/', $agent)) {
            $browser = new MarketwireBot($agent, []);
        } elseif (preg_match('/GoogleToolbar/', $agent)) {
            $browser = new GoogleToolbar($agent, []);
        } elseif (preg_match('/netscape/i', $agent) && preg_match('/msie/i', $agent)) {
            $browser = new Netscape($agent, []);
        } elseif (preg_match('/LSSRocketCrawler/', $agent)) {
            $browser = new LightspeedSystemsRocketCrawler($agent, []);
        } elseif (preg_match('/lightspeedsystems/i', $agent)) {
            $browser = new LightspeedSystemsCrawler($agent, []);
        } elseif (preg_match('/SL Commerce Client/', $agent)) {
            $browser = new SecondLiveCommerceClient($agent, []);
        } elseif (preg_match('/(IEMobile|WPDesktop|ZuneWP7|XBLWP7)/', $agent)) {
            $browser = new MicrosoftMobileExplorer($agent, []);
        } elseif (preg_match('/BingPreview/', $agent)) {
            $browser = new BingPreview($agent, []);
        } elseif (preg_match('/360Spider/', $agent)) {
            $browser = new Bot360($agent, []);
        } elseif (preg_match('/Outlook\-Express/', $agent)) {
            $browser = new WindowsLiveMail($agent, []);
        } elseif (preg_match('/Outlook/', $agent)) {
            $browser = new MicrosoftOutlook($agent, []);
        } elseif (preg_match('/microsoft office mobile/i', $agent)) {
            $browser = new MicrosoftOffice($agent, []);
        } elseif (preg_match('/MSOffice/', $agent)) {
            $browser = new MicrosoftOffice($agent, []);
        } elseif (preg_match('/Microsoft Office Protocol Discovery/', $agent)) {
            $browser = new MicrosoftOfficeProtocolDiscovery($agent, []);
        } elseif (preg_match('/excel/i', $agent)) {
            $browser = new MicrosoftExcel($agent, []);
        } elseif (preg_match('/powerpoint/i', $agent)) {
            $browser = new MicrosoftPowerPoint($agent, []);
        } elseif (preg_match('/WordPress/', $agent)) {
            $browser = new WordPress($agent, []);
        } elseif (preg_match('/Word/', $agent)) {
            $browser = new MicrosoftWord($agent, []);
        } elseif (preg_match('/OneNote/', $agent)) {
            $browser = new MicrosoftOneNote($agent, []);
        } elseif (preg_match('/Visio/', $agent)) {
            $browser = new MicrosoftVisio($agent, []);
        } elseif (preg_match('/Access/', $agent)) {
            $browser = new MicrosoftAccess($agent, []);
        } elseif (preg_match('/Lync/', $agent)) {
            $browser = new MicrosoftLync($agent, []);
        } elseif (preg_match('/Office SyncProc/', $agent)) {
            $browser = new MicrosoftOfficeSyncProc($agent, []);
        } elseif (preg_match('/Office Upload Center/', $agent)) {
            $browser = new MicrosoftOfficeUploadCenter($agent, []);
        } elseif (preg_match('/frontpage/i', $agent)) {
            $browser = new MicrosoftFrontPage($agent, []);
        } elseif (preg_match('/microsoft office/i', $agent)) {
            $browser = new MicrosoftOffice($agent, []);
        } elseif (preg_match('/Crazy Browser/', $agent)) {
            $browser = new CrazyBrowser($agent, []);
        } elseif (preg_match('/Deepnet Explorer/', $agent)) {
            $browser = new DeepnetExplorer($agent, []);
        } elseif (preg_match('/kkman/i', $agent)) {
            $browser = new Kkman($agent, []);
        } elseif (preg_match('/Lunascape/', $agent)) {
            $browser = new Lunascape($agent, []);
        } elseif (preg_match('/Sleipnir/', $agent)) {
            $browser = new Sleipnir($agent, []);
        } elseif (preg_match('/Smartsite HTTPClient/', $agent)) {
            $browser = new SmartsiteHttpClient($agent, []);
        } elseif (preg_match('/GomezAgent/', $agent)) {
            $browser = new GomezSiteMonitor($agent, []);
        } elseif (preg_match('/Mozilla\/5\.0.*\(.*Trident\/8\.0.*rv\:\d+\).*/', $agent)
            || preg_match('/Mozilla\/5\.0.*\(.*Trident\/7\.0.*\) like Gecko.*/', $agent)
            || preg_match('/Mozilla\/5\.0.*\(.*MSIE 10\.0.*Trident\/(4|5|6|7|8)\.0.*/', $agent)
            || preg_match('/Mozilla\/(4|5)\.0.*\(.*MSIE (9|8|7|6)\.0.*/', $agent)
            || preg_match('/Mozilla\/(4|5)\.0.*\(.*MSIE (5|4)\.\d+.*/', $agent)
            || preg_match('/Mozilla\/\d\.\d+.*\(.*MSIE (3|2|1)\.\d+.*/', $agent)
        ) {
            $browser = new MicrosoftInternetExplorer($agent, []);
        } elseif (false !== strpos($agent, 'Chromium')) {
            $browser = new Chromium($agent, []);
        } elseif (false !== strpos($agent, 'Iron')) {
            $browser = new Iron($agent, []);
        } elseif (preg_match('/midori/i', $agent)) {
            $browser = new Midori($agent, []);
        } elseif (preg_match('/Google Page Speed Insights/', $agent)) {
            $browser = new GooglePageSpeedInsights($agent, []);
        } elseif (preg_match('/(web\/snippet)/', $agent)) {
            $browser = new GoogleWebSnippet($agent, []);
        } elseif (preg_match('/(googlebot\-mobile)/i', $agent)) {
            $browser = new GooglebotMobileBot($agent, []);
        } elseif (preg_match('/Google Wireless Transcoder/', $agent)) {
            $browser = new GoogleWirelessTranscoder($agent, []);
        } elseif (preg_match('/Locubot/', $agent)) {
            $browser = new Locubot($agent, []);
        } elseif (preg_match('/(com\.google\.GooglePlus)/i', $agent)) {
            $browser = new GooglePlus($agent, []);
        } elseif (preg_match('/Google\-HTTP\-Java\-Client/', $agent)) {
            $browser = new GoogleHttpClientLibraryForJava($agent, []);
        } elseif (preg_match('/acapbot/i', $agent)) {
            $browser = new Acapbot($agent, []);
        } elseif (preg_match('/googlebot\-image/i', $agent)) {
            $browser = new GoogleImageSearch($agent, []);
        } elseif (preg_match('/googlebot/i', $agent)) {
            $browser = new Googlebot($agent, []);
        } elseif (preg_match('/^GOOG$/', $agent)) {
            $browser = new Googlebot($agent, []);
        } elseif (preg_match('/viera/i', $agent)) {
            $browser = new SmartViera($agent, []);
        } elseif (preg_match('/Nichrome/', $agent)) {
            $browser = new Nichrome($agent, []);
        } elseif (preg_match('/Kinza/', $agent)) {
            $browser = new Kinza($agent, []);
        } elseif (preg_match('/Google Keyword Suggestion/', $agent)) {
            $browser = new GoogleKeywordSuggestion($agent, []);
        } elseif (preg_match('/Google Web Preview/', $agent)) {
            $browser = new GoogleWebPreview($agent, []);
        } elseif (preg_match('/Google-Adwords-DisplayAds-WebRender/', $agent)) {
            $browser = new GoogleAdwordsDisplayAdsWebRender($agent, []);
        } elseif (preg_match('/HubSpot Webcrawler/', $agent)) {
            $browser = new HubSpotWebcrawler($agent, []);
        } elseif (preg_match('/RockMelt/', $agent)) {
            $browser = new Rockmelt($agent, []);
        } elseif (preg_match('/ SE /', $agent)) {
            $browser = new SogouExplorer($agent, []);
        } elseif (preg_match('/ArchiveBot/', $agent)) {
            $browser = new ArchiveBot($agent, []);
        } elseif (preg_match('/Edge/', $agent) && null !== $platform && 'Windows Phone OS' === $platform->getName()) {
            $browser = new MicrosoftEdgeMobile($agent, []);
        } elseif (preg_match('/Edge/', $agent)) {
            $browser = new MicrosoftEdge($agent, []);
        } elseif (preg_match('/diffbot/i', $agent)) {
            $browser = new Diffbot($agent, []);
        } elseif (preg_match('/vivaldi/i', $agent)) {
            $browser = new Vivaldi($agent, []);
        } elseif (preg_match('/LBBROWSER/', $agent)) {
            $browser = new Liebao($agent, []);
        } elseif (preg_match('/Amigo/', $agent)) {
            $browser = new Amigo($agent, []);
        } elseif (preg_match('/CoolNovoChromePlus/', $agent)) {
            $browser = new CoolNovoChromePlus($agent, []);
        } elseif (preg_match('/CoolNovo/', $agent)) {
            $browser = new CoolNovo($agent, []);
        } elseif (preg_match('/Kenshoo/', $agent)) {
            $browser = new Kenshoo($agent, []);
        } elseif (preg_match('/Bowser/', $agent)) {
            $browser = new Bowser($agent, []);
        } elseif (preg_match('/360SE/', $agent)) {
            $browser = new SecureBrowser360($agent, []);
        } elseif (preg_match('/360EE/', $agent)) {
            $browser = new SpeedBrowser360($agent, []);
        } elseif (preg_match('/ASW/', $agent)) {
            $browser = new AvastSafeZone($agent, []);
        } elseif (preg_match('/Wire/', $agent)) {
            $browser = new WireApp($agent, []);
        } elseif (preg_match('/chrome\/(\d+)\.(\d+)/i', $agent, $matches)
            && isset($matches[1])
            && isset($matches[2])
            && $matches[1] >= 1
            && $matches[2] > 0
            && $matches[2] <= 10
        ) {
            $browser = new ComodoDragon($agent, []);
        } elseif (preg_match('/Flock/', $agent)) {
            $browser = new Flock($agent, []);
        } elseif (preg_match('/Bromium Safari/', $agent)) {
            $browser = new Vsentry($agent, []);
        } elseif (preg_match('/(chrome|crmo|crios)/i', $agent)) {
            $browser = new Chrome($agent, []);
        } elseif (preg_match('/(dolphin http client)/i', $agent)) {
            $browser = new DolphinSmalltalkHttpClient($agent, []);
        } elseif (preg_match('/(dolphin|dolfin)/i', $agent)) {
            $browser = new Dolfin($agent, []);
        } elseif (preg_match('/Arora/', $agent)) {
            $browser = new Arora($agent, []);
        } elseif (preg_match('/com\.douban\.group/i', $agent)) {
            $browser = new DoubanApp($agent, []);
        } elseif (preg_match('/ovibrowser/i', $agent)) {
            $browser = new NokiaProxyBrowser($agent, []);
        } elseif (preg_match('/MiuiBrowser/i', $agent)) {
            $browser = new MiuiBrowser($agent, []);
        } elseif (preg_match('/ibrowser/i', $agent)) {
            $browser = new IBrowser($agent, []);
        } elseif (preg_match('/OneBrowser/', $agent)) {
            $browser = new OneBrowser($agent, []);
        } elseif (preg_match('/Baiduspider\-image/', $agent)) {
            $browser = new BaiduImageSearch($agent, []);
        } elseif (preg_match('/http:\/\/www\.baidu\.com\/search/', $agent)) {
            $browser = new BaiduMobileSearch($agent, []);
        } elseif (preg_match('/(yjapp|yjtop)/i', $agent)) {
            $browser = new YahooApp($agent, []);
        } elseif (preg_match('/(linux; u; android|linux; android)/i', $agent) && preg_match('/version/i', $agent)) {
            $browser = new AndroidWebkit($agent, []);
        } elseif (preg_match('/safari/i', $agent) && null !== $platform && 'Android' === $platform->getName()) {
            $browser = new AndroidWebkit($agent, []);
        } elseif (preg_match('/Browser\/AppleWebKit/', $agent)) {
            $browser = new AndroidWebkit($agent, []);
        } elseif (preg_match('/Android\/[\d\.]+ release/', $agent)) {
            $browser = new AndroidWebkit($agent, []);
        } elseif (false !== strpos($agent, 'BlackBerry') && false !== strpos($agent, 'Version')) {
            $browser = new Blackberry($agent, []);
        } elseif (preg_match('/(webOS|wOSBrowser|wOSSystem)/', $agent)) {
            $browser = new WebkitWebos($agent, []);
        } elseif (preg_match('/OmniWeb/', $agent)) {
            $browser = new Omniweb($agent, []);
        } elseif (preg_match('/Windows Phone Search/', $agent)) {
            $browser = new WindowsPhoneSearch($agent, []);
        } elseif (preg_match('/Windows\-Update\-Agent/', $agent)) {
            $browser = new WindowsUpdateAgent($agent, []);
        } elseif (preg_match('/nokia/i', $agent)) {
            $browser = new NokiaBrowser($agent, []);
        } elseif (preg_match('/twitter for i/i', $agent)) {
            $browser = new TwitterApp($agent, []);
        } elseif (preg_match('/twitterbot/i', $agent)) {
            $browser = new Twitterbot($agent, []);
        } elseif (preg_match('/GSA/', $agent)) {
            $browser = new GoogleApp($agent, []);
        } elseif (preg_match('/QtCarBrowser/', $agent)) {
            $browser = new ModelsBrowser($agent, []);
        } elseif (preg_match('/Qt/', $agent)) {
            $browser = new Qt($agent, []);
        } elseif (preg_match('/Instagram/', $agent)) {
            $browser = new InstagramApp($agent, []);
        } elseif (preg_match('/WebClip/', $agent)) {
            $browser = new WebClip($agent, []);
        } elseif (preg_match('/Mercury/', $agent)) {
            $browser = new Mercury($agent, []);
        } elseif (preg_match('/MacAppStore/', $agent)) {
            $browser = new MacAppStore($agent, []);
        } elseif (preg_match('/AppStore/', $agent)) {
            $browser = new AppleAppStoreApp($agent, []);
        } elseif (preg_match('/Webglance/', $agent)) {
            $browser = new WebGlance($agent, []);
        } elseif (preg_match('/YHOO\_Search\_App/', $agent)) {
            $browser = new YahooMobileApp($agent, []);
        } elseif (preg_match('/NewsBlur Feed Fetcher/', $agent)) {
            $browser = new NewsBlurFeedFetcher($agent, []);
        } elseif (preg_match('/AppleCoreMedia/', $agent)) {
            $browser = new AppleCoreMedia($agent, []);
        } elseif (preg_match('/dataaccessd/', $agent)) {
            $browser = new IosDataaccessd($agent, []);
        } elseif (preg_match('/MailChimp/', $agent)) {
            $browser = new MailChimp($agent, []);
        } elseif (preg_match('/MailBar/', $agent)) {
            $browser = new MailBar($agent, []);
        } elseif (preg_match('/^Mail/', $agent)) {
            $browser = new AppleMail($agent, []);
        } elseif (preg_match('/^Mozilla\/5\.0.*\(.*(CPU iPhone OS|CPU OS) \d+(_|\.)\d+.* like Mac OS X.*\) AppleWebKit.* \(KHTML, like Gecko\)$/', $agent)) {
            $browser = new AppleMail($agent, []);
        } elseif (preg_match('/^Mozilla\/5\.0 \(Macintosh; Intel Mac OS X.*\) AppleWebKit.* \(KHTML, like Gecko\)$/', $agent)) {
            $browser = new AppleMail($agent, []);
        } elseif (preg_match('/^Mozilla\/5\.0 \(Windows.*\) AppleWebKit.* \(KHTML, like Gecko\)$/', $agent)) {
            $browser = new AppleMail($agent, []);
        } elseif (preg_match('/msnbot\-media/i', $agent)) {
            $browser = new MsnBotMedia($agent, []);
        } elseif (preg_match('/adidxbot/i', $agent)) {
            $browser = new Adidxbot($agent, []);
        } elseif (preg_match('/msnbot/i', $agent)) {
            $browser = new Bingbot($agent, []);
        } elseif (preg_match('/(backberry|bb10)/i', $agent)) {
            $browser = new Blackberry($agent, []);
        } elseif (preg_match('/WeTab\-Browser/', $agent)) {
            $browser = new WeTabBrowser($agent, []);
        } elseif (preg_match('/profiller/', $agent)) {
            $browser = new Profiller($agent, []);
        } elseif (preg_match('/(wkhtmltopdf)/i', $agent)) {
            $browser = new WkHtmltopdf($agent, []);
        } elseif (preg_match('/(wkhtmltoimage)/i', $agent)) {
            $browser = new WkHtmltoImage($agent, []);
        } elseif (preg_match('/(wp\-iphone|wp\-android)/', $agent)) {
            $browser = new WordPressApp($agent, []);
        } elseif (preg_match('/OktaMobile/', $agent)) {
            $browser = new OktaMobileApp($agent, []);
        } elseif (preg_match('/kmail2/', $agent)) {
            $browser = new Kmail2($agent, []);
        } elseif (preg_match('/eb\-iphone/', $agent)) {
            $browser = new EbApp($agent, []);
        } elseif (preg_match('/ElmediaPlayer/', $agent)) {
            $browser = new ElmediaPlayer($agent, []);
        } elseif (preg_match('/Schoolwires/', $agent)) {
            $browser = new SchoolwiresApp($agent, []);
        } elseif (preg_match('/Dreamweaver/', $agent)) {
            $browser = new Dreamweaver($agent, []);
        } elseif (preg_match('/akregator/', $agent)) {
            $browser = new Akregator($agent, []);
        } elseif (preg_match('/Installatron/', $agent)) {
            $browser = new Installatron($agent, []);
        } elseif (preg_match('/Quora Link Preview/', $agent)) {
            $browser = new QuoraLinkPreviewBot($agent, []);
        } elseif (preg_match('/Quora/', $agent)) {
            $browser = new QuoraApp($agent, []);
        } elseif (preg_match('/Rocky ChatWork Mobile/', $agent)) {
            $browser = new RockyChatWorkMobile($agent, []);
        } elseif (preg_match('/AdsBot\-Google\-Mobile/', $agent)) {
            $browser = new GoogleAdsbotMobile($agent, []);
        } elseif (preg_match('/epiphany/i', $agent)) {
            $browser = new Epiphany($agent, []);
        } elseif (preg_match('/rekonq/', $agent)) {
            $browser = new Rekonq($agent, []);
        } elseif (preg_match('/Skyfire/', $agent)) {
            $browser = new Skyfire($agent, []);
        } elseif (preg_match('/FlixsteriOS/', $agent)) {
            $browser = new FlixsterApp($agent, []);
        } elseif (preg_match('/(adbeat\_bot|adbeat\.com)/', $agent)) {
            $browser = new AdbeatBot($agent, []);
        } elseif (preg_match('/(SecondLife|Second Life)/', $agent)) {
            $browser = new SecondLiveClient($agent, []);
        } elseif (preg_match('/(Salesforce1|SalesforceTouchContainer)/', $agent)) {
            $browser = new SalesForceApp($agent, []);
        } elseif (preg_match('/(nagios\-plugins|check\_http)/', $agent)) {
            $browser = new Nagios($agent, []);
        } elseif (preg_match('/bingbot/i', $agent)) {
            $browser = new Bingbot($agent, []);
        } elseif (preg_match('/Mediapartners\-Google/', $agent)) {
            $browser = new GoogleAdSenseBot($agent, []);
        } elseif (preg_match('/SMTBot/', $agent)) {
            $browser = new SmtBot($agent, []);
        } elseif (preg_match('/domain\.com/', $agent)) {
            $browser = new PagePeekerScreenshotMaker($agent, []);
        } elseif (preg_match('/PagePeeker/', $agent)) {
            $browser = new PagePeeker($agent, []);
        } elseif (preg_match('/DiigoBrowser/', $agent)) {
            $browser = new DiigoBrowser($agent, []);
        } elseif (preg_match('/kontact/', $agent)) {
            $browser = new Kontact($agent, []);
        } elseif (preg_match('/QupZilla/', $agent)) {
            $browser = new QupZilla($agent, []);
        } elseif (preg_match('/FxiOS/', $agent)) {
            $browser = new FirefoxIos($agent, []);
        } elseif (preg_match('/qutebrowser/', $agent)) {
            $browser = new QuteBrowser($agent, []);
        } elseif (preg_match('/Otter/', $agent)) {
            $browser = new Otter($agent, []);
        } elseif (preg_match('/PaleMoon/', $agent)) {
            $browser = new Palemoon($agent, []);
        } elseif (preg_match('/slurp/i', $agent)) {
            $browser = new YahooSlurp($agent, []);
        } elseif (preg_match('/applebot/i', $agent)) {
            $browser = new Applebot($agent, []);
        } elseif (preg_match('/SoundCloud/', $agent)) {
            $browser = new SoundCloudApp($agent, []);
        } elseif (preg_match('/Rival IQ/', $agent)) {
            $browser = new RivalIqBot($agent, []);
        } elseif (preg_match('/Evernote Clip Resolver/', $agent)) {
            $browser = new EvernoteClipResolver($agent, []);
        } elseif (preg_match('/Evernote/', $agent)) {
            $browser = new EvernoteApp($agent, []);
        } elseif (preg_match('/Fluid/', $agent)) {
            $browser = new Fluid($agent, []);
        } elseif (preg_match('/safari/i', $agent)) {
            $browser = new Safari($agent, []);
        } elseif (preg_match('/^Mozilla\/(4|5)\.0 \(Macintosh; .* Mac OS X .*\) AppleWebKit\/.* \(KHTML, like Gecko\) Version\/[\d\.]+$/i', $agent)) {
            $browser = new Safari($agent, []);
        } elseif (preg_match('/TWCAN\/SportsNet/', $agent)) {
            $browser = new TwcSportsNet($agent, []);
        } elseif (preg_match('/AdobeAIR/', $agent)) {
            $browser = new AdobeAIR($agent, []);
        } elseif (preg_match('/(easouspider)/i', $agent)) {
            $browser = new EasouSpider($agent, []);
        } elseif (preg_match('/^Mozilla\/5\.0.*\((iPhone|iPad|iPod).*\).*AppleWebKit\/.*\(.*KHTML, like Gecko.*\).*Mobile.*/i', $agent)) {
            $browser = new MobileSafariUiWebView($agent, []);
        } elseif (preg_match('/waterfox/i', $agent)) {
            $browser = new WaterFox($agent, []);
        } elseif (preg_match('/Thunderbird/', $agent)) {
            $browser = new Thunderbird($agent, []);
        } elseif (preg_match('/Fennec/', $agent)) {
            $browser = new Fennec($agent, []);
        } elseif (preg_match('/myibrow/', $agent)) {
            $browser = new MyInternetBrowser($agent, []);
        } elseif (preg_match('/Daumoa/', $agent)) {
            $browser = new Daumoa($agent, []);
        } elseif (preg_match('/PaleMoon/', $agent)) {
            $browser = new Palemoon($agent, []);
        } elseif (preg_match('/iceweasel/i', $agent)) {
            $browser = new Iceweasel($agent, []);
        } elseif (preg_match('/icecat/i', $agent)) {
            $browser = new IceCat($agent, []);
        } elseif (preg_match('/iceape/i', $agent)) {
            $browser = new Iceape($agent, []);
        } elseif (preg_match('/galeon/i', $agent)) {
            $browser = new Galeon($agent, []);
        } elseif (preg_match('/SurveyBot/', $agent)) {
            $browser = new SurveyBot($agent, []);
        } elseif (preg_match('/aggregator\:Spinn3r/', $agent)) {
            $browser = new Spinn3rRssAggregator($agent, []);
        } elseif (preg_match('/TweetmemeBot/', $agent)) {
            $browser = new TweetmemeBot($agent, []);
        } elseif (preg_match('/Butterfly/', $agent)) {
            $browser = new ButterflyRobot($agent, []);
        } elseif (preg_match('/James BOT/', $agent)) {
            $browser = new JamesBot($agent, []);
        } elseif (preg_match('/MSIE or Firefox mutant; not on Windows server/', $agent)) {
            $browser = new Daumoa($agent, []);
        } elseif (preg_match('/SailfishBrowser/', $agent)) {
            $browser = new SailfishBrowser($agent, []);
        } elseif (preg_match('/KcB/', $agent)) {
            $browser = new UnknownBrowser($agent, []);
        } elseif (preg_match('/kazehakase/i', $agent)) {
            $browser = new Kazehakase($agent, []);
        } elseif (preg_match('/cometbird/i', $agent)) {
            $browser = new CometBird($agent, []);
        } elseif (preg_match('/Camino/', $agent)) {
            $browser = new Camino($agent, []);
        } elseif (preg_match('/SlimerJS/', $agent)) {
            $browser = new SlimerJs($agent, []);
        } elseif (preg_match('/MultiZilla/', $agent)) {
            $browser = new MultiZilla($agent, []);
        } elseif (preg_match('/Minimo/', $agent)) {
            $browser = new Minimo($agent, []);
        } elseif (preg_match('/MicroB/', $agent)) {
            $browser = new MicroB($agent, []);
        } elseif (preg_match('/firefox/i', $agent)
            && !preg_match('/gecko/i', $agent)
            && preg_match('/anonymized/i', $agent)
        ) {
            $browser = new Firefox($agent, []);
        } elseif (preg_match('/(firefox|minefield|shiretoko|bonecho|namoroka)/i', $agent)) {
            $browser = new Firefox($agent, []);
        } elseif (preg_match('/gvfs/', $agent)) {
            $browser = new Gvfs($agent, []);
        } elseif (preg_match('/luakit/', $agent)) {
            $browser = new Luakit($agent, []);
        } elseif (preg_match('/playstation 3/i', $agent)) {
            $browser = new NetFront($agent, []);
        } elseif (preg_match('/sistrix/i', $agent)) {
            $browser = new Sistrix($agent, []);
        } elseif (preg_match('/ezooms/i', $agent)) {
            $browser = new Ezooms($agent, []);
        } elseif (preg_match('/grapefx/i', $agent)) {
            $browser = new GrapeFx($agent, []);
        } elseif (preg_match('/grapeshotcrawler/i', $agent)) {
            $browser = new GrapeshotCrawler($agent, []);
        } elseif (preg_match('/(mail\.ru)/i', $agent)) {
            $browser = new MailRu($agent, []);
        } elseif (preg_match('/(proximic)/i', $agent)) {
            $browser = new Proximic($agent, []);
        } elseif (preg_match('/(polaris)/i', $agent)) {
            $browser = new Polaris($agent, []);
        } elseif (preg_match('/(another web mining tool|awmt)/i', $agent)) {
            $browser = new AnotherWebMiningTool($agent, []);
        } elseif (preg_match('/(wbsearchbot|wbsrch)/i', $agent)) {
            $browser = new WbSearchBot($agent, []);
        } elseif (preg_match('/(konqueror)/i', $agent)) {
            $browser = new Konqueror($agent, []);
        } elseif (preg_match('/(typo3\-linkvalidator)/i', $agent)) {
            $browser = new Typo3Linkvalidator($agent, []);
        } elseif (preg_match('/feeddlerrss/i', $agent)) {
            $browser = new FeeddlerRssReader($agent, []);
        } elseif (preg_match('/^mozilla\/5\.0 \((iphone|ipad|ipod).*CPU like Mac OS X.*\) AppleWebKit\/\d+/i', $agent)) {
            $browser = new Safari($agent, []);
        } elseif (preg_match('/(ios|iphone|ipad|ipod)/i', $agent)) {
            $browser = new MobileSafariUiWebView($agent, []);
        } elseif (preg_match('/paperlibot/i', $agent)) {
            $browser = new PaperLiBot($agent, []);
        } elseif (preg_match('/spbot/i', $agent)) {
            $browser = new Seoprofiler($agent, []);
        } elseif (preg_match('/dotbot/i', $agent)) {
            $browser = new DotBot($agent, []);
        } elseif (preg_match('/(google\-structureddatatestingtool|Google\-structured\-data\-testing\-tool)/i', $agent)) {
            $browser = new GoogleStructuredDataTestingTool($agent, []);
        } elseif (preg_match('/webmastercoffee/i', $agent)) {
            $browser = new WebmasterCoffee($agent, []);
        } elseif (preg_match('/ahrefs/i', $agent)) {
            $browser = new AhrefsBot($agent, []);
        } elseif (preg_match('/apercite/i', $agent)) {
            $browser = new Apercite($agent, []);
        } elseif (preg_match('/woobot/', $agent)) {
            $browser = new WooRank($agent, []);
        } elseif (preg_match('/Blekkobot/', $agent)) {
            $browser = new BlekkoBot($agent, []);
        } elseif (preg_match('/PagesInventory/', $agent)) {
            $browser = new PagesInventoryBot($agent, []);
        } elseif (preg_match('/Slackbot\-LinkExpanding/', $agent)) {
            $browser = new SlackbotLinkExpanding($agent, []);
        } elseif (preg_match('/Slackbot/', $agent)) {
            $browser = new Slackbot($agent, []);
        } elseif (preg_match('/SEOkicks\-Robot/', $agent)) {
            $browser = new Seokicks($agent, []);
        } elseif (preg_match('/Exabot/', $agent)) {
            $browser = new Exabot($agent, []);
        } elseif (preg_match('/DomainSCAN/', $agent)) {
            $browser = new DomainScanServerMonitoring($agent, []);
        } elseif (preg_match('/JobRoboter/', $agent)) {
            $browser = new JobRoboter($agent, []);
        } elseif (preg_match('/AcoonBot/', $agent)) {
            $browser = new AcoonBot($agent, []);
        } elseif (preg_match('/woriobot/', $agent)) {
            $browser = new Woriobot($agent, []);
        } elseif (preg_match('/MonoBot/', $agent)) {
            $browser = new MonoBot($agent, []);
        } elseif (preg_match('/DomainSigmaCrawler/', $agent)) {
            $browser = new DomainSigmaCrawler($agent, []);
        } elseif (preg_match('/bnf\.fr\_bot/', $agent)) {
            $browser = new BnfFrBot($agent, []);
        } elseif (preg_match('/CrawlRobot/', $agent)) {
            $browser = new CrawlRobot($agent, []);
        } elseif (preg_match('/AddThis\.com robot/', $agent)) {
            $browser = new AddThisRobot($agent, []);
        } elseif (preg_match('/(Yeti|naver\.com\/robots)/', $agent)) {
            $browser = new NaverBot($agent, []);
        } elseif (preg_match('/^robots$/', $agent)) {
            $browser = new TestCrawler($agent, []);
        } elseif (preg_match('/DeuSu/', $agent)) {
            $browser = new WerbefreieDeutscheSuchmaschine($agent, []);
        } elseif (preg_match('/obot/i', $agent)) {
            $browser = new Obot($agent, []);
        } elseif (preg_match('/ZumBot/', $agent)) {
            $browser = new ZumBot($agent, []);
        } elseif (preg_match('/(umbot)/i', $agent)) {
            $browser = new UmBot($agent, []);
        } elseif (preg_match('/(picmole)/i', $agent)) {
            $browser = new PicmoleBot($agent, []);
        } elseif (preg_match('/(zollard)/i', $agent)) {
            $browser = new ZollardWorm($agent, []);
        } elseif (preg_match('/(fhscan core)/i', $agent)) {
            $browser = new FhscanCore($agent, []);
        } elseif (preg_match('/nbot/i', $agent)) {
            $browser = new Nbot($agent, []);
        } elseif (preg_match('/(loadtimebot)/i', $agent)) {
            $browser = new LoadTimeBot($agent, []);
        } elseif (preg_match('/(scrubby)/i', $agent)) {
            $browser = new Scrubby($agent, []);
        } elseif (preg_match('/(squzer)/i', $agent)) {
            $browser = new Squzer($agent, []);
        } elseif (preg_match('/PiplBot/', $agent)) {
            $browser = new PiplBot($agent, []);
        } elseif (preg_match('/EveryoneSocialBot/', $agent)) {
            $browser = new EveryoneSocialBot($agent, []);
        } elseif (preg_match('/AOLbot/', $agent)) {
            $browser = new AolBot($agent, []);
        } elseif (preg_match('/GLBot/', $agent)) {
            $browser = new GlBot($agent, []);
        } elseif (preg_match('/(lbot)/i', $agent)) {
            $browser = new Lbot($agent, []);
        } elseif (preg_match('/(blexbot)/i', $agent)) {
            $browser = new BlexBot($agent, []);
        } elseif (preg_match('/(socialradarbot)/i', $agent)) {
            $browser = new Socialradarbot($agent, []);
        } elseif (preg_match('/(synapse)/i', $agent)) {
            $browser = new ApacheSynapse($agent, []);
        } elseif (preg_match('/(linkdexbot)/i', $agent)) {
            $browser = new LinkdexBot($agent, []);
        } elseif (preg_match('/(coccoc)/i', $agent)) {
            $browser = new CocCocBot($agent, []);
        } elseif (preg_match('/(siteexplorer)/i', $agent)) {
            $browser = new SiteExplorer($agent, []);
        } elseif (preg_match('/(semrushbot)/i', $agent)) {
            $browser = new SemrushBot($agent, []);
        } elseif (preg_match('/(istellabot)/i', $agent)) {
            $browser = new IstellaBot($agent, []);
        } elseif (preg_match('/(meanpathbot)/i', $agent)) {
            $browser = new MeanpathBot($agent, []);
        } elseif (preg_match('/(XML Sitemaps Generator)/', $agent)) {
            $browser = new XmlSitemapsGenerator($agent, []);
        } elseif (preg_match('/SeznamBot/', $agent)) {
            $browser = new SeznamBot($agent, []);
        } elseif (preg_match('/URLAppendBot/', $agent)) {
            $browser = new UrlAppendBot($agent, []);
        } elseif (preg_match('/NetSeer crawler/', $agent)) {
            $browser = new NetseerCrawler($agent, []);
        } elseif (preg_match('/SeznamBot/', $agent)) {
            $browser = new SeznamBot($agent, []);
        } elseif (preg_match('/Add Catalog/', $agent)) {
            $browser = new AddCatalog($agent, []);
        } elseif (preg_match('/Moreover/', $agent)) {
            $browser = new Moreover($agent, []);
        } elseif (preg_match('/LinkpadBot/', $agent)) {
            $browser = new LinkpadBot($agent, []);
        } elseif (preg_match('/Lipperhey SEO Service/', $agent)) {
            $browser = new LipperheySeoService($agent, []);
        } elseif (preg_match('/Blog Search/', $agent)) {
            $browser = new BlogSearch($agent, []);
        } elseif (preg_match('/Qualidator\.com Bot/', $agent)) {
            $browser = new QualidatorBot($agent, []);
        } elseif (preg_match('/fr\-crawler/', $agent)) {
            $browser = new FrCrawler($agent, []);
        } elseif (preg_match('/ca\-crawler/', $agent)) {
            $browser = new CaCrawler($agent, []);
        } elseif (preg_match('/Website Thumbnail Generator/', $agent)) {
            $browser = new WebsiteThumbnailGenerator($agent, []);
        } elseif (preg_match('/WebThumb/', $agent)) {
            $browser = new WebThumb($agent, []);
        } elseif (preg_match('/KomodiaBot/', $agent)) {
            $browser = new KomodiaBot($agent, []);
        } elseif (preg_match('/GroupHigh/', $agent)) {
            $browser = new GroupHighBot($agent, []);
        } elseif (preg_match('/theoldreader/', $agent)) {
            $browser = new TheOldReader($agent, []);
        } elseif (preg_match('/Google\-Site\-Verification/', $agent)) {
            $browser = new GoogleSiteVerification($agent, []);
        } elseif (preg_match('/Prlog/', $agent)) {
            $browser = new Prlog($agent, []);
        } elseif (preg_match('/CMS Crawler/', $agent)) {
            $browser = new CmsCrawler($agent, []);
        } elseif (preg_match('/pmoz\.info ODP link checker/', $agent)) {
            $browser = new PmozinfoOdpLinkChecker($agent, []);
        } elseif (preg_match('/Twingly Recon/', $agent)) {
            $browser = new TwinglyRecon($agent, []);
        } elseif (preg_match('/Embedly/', $agent)) {
            $browser = new Embedly($agent, []);
        } elseif (preg_match('/Alexabot/', $agent)) {
            $browser = new Alexabot($agent, []);
        } elseif (preg_match('/alexa site audit/', $agent)) {
            $browser = new AlexaSiteAudit($agent, []);
        } elseif (preg_match('/MJ12bot/', $agent)) {
            $browser = new Mj12bot($agent, []);
        } elseif (preg_match('/HTTrack/', $agent)) {
            $browser = new Httrack($agent, []);
        } elseif (preg_match('/UnisterBot/', $agent)) {
            $browser = new Unisterbot($agent, []);
        } elseif (preg_match('/CareerBot/', $agent)) {
            $browser = new CareerBot($agent, []);
        } elseif (preg_match('/80legs/i', $agent)) {
            $browser = new Bot80Legs($agent, []);
        } elseif (preg_match('/wada\.vn/i', $agent)) {
            $browser = new WadavnSearchBot($agent, []);
        } elseif (preg_match('/(NX|WiiU|Nintendo 3DS)/', $agent)) {
            $browser = new NetFrontNx($agent, []);
        } elseif (preg_match('/(netfront|playstation 4)/i', $agent)) {
            $browser = new NetFront($agent, []);
        } elseif (preg_match('/XoviBot/', $agent)) {
            $browser = new XoviBot($agent, []);
        } elseif (preg_match('/007ac9 Crawler/', $agent)) {
            $browser = new Crawler007AC9($agent, []);
        } elseif (preg_match('/200PleaseBot/', $agent)) {
            $browser = new Please200Bot($agent, []);
        } elseif (preg_match('/Abonti/', $agent)) {
            $browser = new AbontiBot($agent, []);
        } elseif (preg_match('/publiclibraryarchive/', $agent)) {
            $browser = new PublicLibraryArchive($agent, []);
        } elseif (preg_match('/PAD\-bot/', $agent)) {
            $browser = new PadBot($agent, []);
        } elseif (preg_match('/SoftListBot/', $agent)) {
            $browser = new SoftListBot($agent, []);
        } elseif (preg_match('/sReleaseBot/', $agent)) {
            $browser = new SreleaseBot($agent, []);
        } elseif (preg_match('/Vagabondo/', $agent)) {
            $browser = new Vagabondo($agent, []);
        } elseif (preg_match('/special\_archiver/', $agent)) {
            $browser = new InternetArchiveSpecialArchiver($agent, []);
        } elseif (preg_match('/Optimizer/', $agent)) {
            $browser = new OptimizerBot($agent, []);
        } elseif (preg_match('/Sophora Linkchecker/', $agent)) {
            $browser = new SophoraLinkchecker($agent, []);
        } elseif (preg_match('/SEOdiver/', $agent)) {
            $browser = new SeoDiver($agent, []);
        } elseif (preg_match('/itsscan/', $agent)) {
            $browser = new ItsScan($agent, []);
        } elseif (preg_match('/Google Desktop/', $agent)) {
            $browser = new GoogleDesktop($agent, []);
        } elseif (preg_match('/Lotus\-Notes/', $agent)) {
            $browser = new LotusNotes($agent, []);
        } elseif (preg_match('/AskPeterBot/', $agent)) {
            $browser = new AskPeterBot($agent, []);
        } elseif (preg_match('/discoverybot/', $agent)) {
            $browser = new DiscoveryBot($agent, []);
        } elseif (preg_match('/YandexBot/', $agent)) {
            $browser = new YandexBot($agent, []);
        } elseif (preg_match('/MOSBookmarks/', $agent) && preg_match('/Link Checker/', $agent)) {
            $browser = new MosBookmarksLinkChecker($agent, []);
        } elseif (preg_match('/MOSBookmarks/', $agent)) {
            $browser = new MosBookmarks($agent, []);
        } elseif (preg_match('/WebMasterAid/', $agent)) {
            $browser = new WebMasterAid($agent, []);
        } elseif (preg_match('/AboutUsBot Johnny5/', $agent)) {
            $browser = new AboutUsBotJohnny5($agent, []);
        } elseif (preg_match('/AboutUsBot/', $agent)) {
            $browser = new AboutUsBot($agent, []);
        } elseif (preg_match('/semantic\-visions\.com crawler/', $agent)) {
            $browser = new SemanticVisionsCrawler($agent, []);
        } elseif (preg_match('/waybackarchive\.org/', $agent)) {
            $browser = new WaybackArchive($agent, []);
        } elseif (preg_match('/OpenVAS/', $agent)) {
            $browser = new OpenVulnerabilityAssessmentSystem($agent, []);
        } elseif (preg_match('/MixrankBot/', $agent)) {
            $browser = new MixrankBot($agent, []);
        } elseif (preg_match('/InfegyAtlas/', $agent)) {
            $browser = new InfegyAtlasBot($agent, []);
        } elseif (preg_match('/MojeekBot/', $agent)) {
            $browser = new MojeekBot($agent, []);
        } elseif (preg_match('/memorybot/i', $agent)) {
            $browser = new MemoryBot($agent, []);
        } elseif (preg_match('/DomainAppender/', $agent)) {
            $browser = new DomainAppenderBot($agent, []);
        } elseif (preg_match('/GIDBot/', $agent)) {
            $browser = new GidBot($agent, []);
        } elseif (preg_match('/DBot/', $agent)) {
            $browser = new Dbot($agent, []);
        } elseif (preg_match('/PWBot/', $agent)) {
            $browser = new PwBot($agent, []);
        } elseif (preg_match('/\+5Bot/', $agent)) {
            $browser = new Plus5Bot($agent, []);
        } elseif (preg_match('/WASALive\-Bot/', $agent)) {
            $browser = new WasaLiveBot($agent, []);
        } elseif (preg_match('/OpenHoseBot/', $agent)) {
            $browser = new OpenHoseBot($agent, []);
        } elseif (preg_match('/URLfilterDB\-crawler/', $agent)) {
            $browser = new UrlfilterDbCrawler($agent, []);
        } elseif (preg_match('/metager2\-verification\-bot/', $agent)) {
            $browser = new Metager2VerificationBot($agent, []);
        } elseif (preg_match('/Powermarks/', $agent)) {
            $browser = new Powermarks($agent, []);
        } elseif (preg_match('/CloudFlare\-AlwaysOnline/', $agent)) {
            $browser = new CloudFlareAlwaysOnline($agent, []);
        } elseif (preg_match('/Phantom\.js bot/', $agent)) {
            $browser = new PhantomJsBot($agent, []);
        } elseif (preg_match('/Phantom/', $agent)) {
            $browser = new PhantomBrowser($agent, []);
        } elseif (preg_match('/Shrook/', $agent)) {
            $browser = new Shrook($agent, []);
        } elseif (preg_match('/netEstate NE Crawler/', $agent)) {
            $browser = new NetEstateCrawler($agent, []);
        } elseif (preg_match('/garlikcrawler/i', $agent)) {
            $browser = new GarlikCrawler($agent, []);
        } elseif (preg_match('/metageneratorcrawler/i', $agent)) {
            $browser = new MetaGeneratorCrawler($agent, []);
        } elseif (preg_match('/ScreenerBot/', $agent)) {
            $browser = new ScreenerBot($agent, []);
        } elseif (preg_match('/WebTarantula\.com Crawler/', $agent)) {
            $browser = new WebTarantula($agent, []);
        } elseif (preg_match('/BacklinkCrawler/', $agent)) {
            $browser = new BacklinkCrawler($agent, []);
        } elseif (preg_match('/LinksCrawler/', $agent)) {
            $browser = new LinksCrawler($agent, []);
        } elseif (preg_match('/(ssearch\_bot|sSearch Crawler)/', $agent)) {
            $browser = new SsearchCrawler($agent, []);
        } elseif (preg_match('/HRCrawler/', $agent)) {
            $browser = new HrCrawler($agent, []);
        } elseif (preg_match('/ICC\-Crawler/', $agent)) {
            $browser = new IccCrawler($agent, []);
        } elseif (preg_match('/Arachnida Web Crawler/', $agent)) {
            $browser = new ArachnidaWebCrawler($agent, []);
        } elseif (preg_match('/Finderlein Research Crawler/', $agent)) {
            $browser = new FinderleinResearchCrawler($agent, []);
        } elseif (preg_match('/TestCrawler/', $agent)) {
            $browser = new TestCrawler($agent, []);
        } elseif (preg_match('/Scopia Crawler/', $agent)) {
            $browser = new ScopiaCrawler($agent, []);
        } elseif (preg_match('/Crawler/', $agent)) {
            $browser = new Crawler($agent, []);
        } elseif (preg_match('/MetaJobBot/', $agent)) {
            $browser = new MetaJobBot($agent, []);
        } elseif (preg_match('/jig browser web/', $agent)) {
            $browser = new JigBrowserWeb($agent, []);
        } elseif (preg_match('/T\-H\-U\-N\-D\-E\-R\-S\-T\-O\-N\-E/', $agent)) {
            $browser = new TexisWebscript($agent, []);
        } elseif (preg_match('/focuseekbot/', $agent)) {
            $browser = new Focuseekbot($agent, []);
        } elseif (preg_match('/vBSEO/', $agent)) {
            $browser = new VbulletinSeoBot($agent, []);
        } elseif (preg_match('/kgbody/', $agent)) {
            $browser = new Kgbody($agent, []);
        } elseif (preg_match('/JobdiggerSpider/', $agent)) {
            $browser = new JobdiggerSpider($agent, []);
        } elseif (preg_match('/imrbot/', $agent)) {
            $browser = new MignifyBot($agent, []);
        } elseif (preg_match('/kulturarw3/', $agent)) {
            $browser = new Kulturarw3($agent, []);
        } elseif (preg_match('/LucidWorks/', $agent)) {
            $browser = new LucidworksBot($agent, []);
        } elseif (preg_match('/MerchantCentricBot/', $agent)) {
            $browser = new MerchantCentricBot($agent, []);
        } elseif (preg_match('/Nett\.io bot/', $agent)) {
            $browser = new NettioBot($agent, []);
        } elseif (preg_match('/SemanticBot/', $agent)) {
            $browser = new SemanticBot($agent, []);
        } elseif (preg_match('/tweetedtimes/i', $agent)) {
            $browser = new TweetedTimesBot($agent, []);
        } elseif (preg_match('/vkShare/', $agent)) {
            $browser = new VkShare($agent, []);
        } elseif (preg_match('/Yahoo Ad monitoring/', $agent)) {
            $browser = new YahooAdMonitoring($agent, []);
        } elseif (preg_match('/YioopBot/', $agent)) {
            $browser = new YioopBot($agent, []);
        } elseif (preg_match('/zitebot/', $agent)) {
            $browser = new Zitebot($agent, []);
        } elseif (preg_match('/Espial/', $agent)) {
            $browser = new EspialTvBrowser($agent, []);
        } elseif (preg_match('/SiteCon/', $agent)) {
            $browser = new SiteCon($agent, []);
        } elseif (preg_match('/iBooks Author/', $agent)) {
            $browser = new IbooksAuthor($agent, []);
        } elseif (preg_match('/iWeb/', $agent)) {
            $browser = new Iweb($agent, []);
        } elseif (preg_match('/NewsFire/', $agent)) {
            $browser = new NewsFire($agent, []);
        } elseif (preg_match('/RMSnapKit/', $agent)) {
            $browser = new RmSnapKit($agent, []);
        } elseif (preg_match('/Sandvox/', $agent)) {
            $browser = new Sandvox($agent, []);
        } elseif (preg_match('/TubeTV/', $agent)) {
            $browser = new TubeTv($agent, []);
        } elseif (preg_match('/Elluminate Live/', $agent)) {
            $browser = new ElluminateLive($agent, []);
        } elseif (preg_match('/Element Browser/', $agent)) {
            $browser = new ElementBrowser($agent, []);
        } elseif (preg_match('/K\-Meleon/', $agent)) {
            $browser = new Kmeleon($agent, []);
        } elseif (preg_match('/Esribot/', $agent)) {
            $browser = new Esribot($agent, []);
        } elseif (preg_match('/QuickLook/', $agent)) {
            $browser = new QuickLook($agent, []);
        } elseif (preg_match('/dillo/i', $agent)) {
            $browser = new Dillo($agent, []);
        } elseif (preg_match('/Digg/', $agent)) {
            $browser = new DiggBot($agent, []);
        } elseif (preg_match('/Zetakey/', $agent)) {
            $browser = new ZetakeyBrowser($agent, []);
        } elseif (preg_match('/getprismatic\.com/', $agent)) {
            $browser = new PrismaticApp($agent, []);
        } elseif (preg_match('/(FOMA|SH05C)/', $agent)) {
            $browser = new Sharp($agent, []);
        } elseif (preg_match('/OpenWebKitSharp/', $agent)) {
            $browser = new OpenWebkitSharp($agent, []);
        } elseif (preg_match('/AjaxSnapBot/', $agent)) {
            $browser = new AjaxSnapBot($agent, []);
        } elseif (preg_match('/Owler/', $agent)) {
            $browser = new OwlerBot($agent, []);
        } elseif (preg_match('/Yahoo Link Preview/', $agent)) {
            $browser = new YahooLinkPreview($agent, []);
        } elseif (preg_match('/pub\-crawler/', $agent)) {
            $browser = new PubCrawler($agent, []);
        } elseif (preg_match('/Kraken/', $agent)) {
            $browser = new Kraken($agent, []);
        } elseif (preg_match('/Qwantify/', $agent)) {
            $browser = new Qwantify($agent, []);
        } elseif (preg_match('/SetLinks bot/', $agent)) {
            $browser = new SetLinksCrawler($agent, []);
        } elseif (preg_match('/MegaIndex\.ru/', $agent)) {
            $browser = new MegaIndexBot($agent, []);
        } elseif (preg_match('/Cliqzbot/', $agent)) {
            $browser = new Cliqzbot($agent, []);
        } elseif (preg_match('/DAWINCI ANTIPLAG SPIDER/', $agent)) {
            $browser = new DawinciAntiplagSpider($agent, []);
        } elseif (preg_match('/AdvBot/', $agent)) {
            $browser = new AdvBot($agent, []);
        } elseif (preg_match('/DuckDuckGo\-Favicons\-Bot/', $agent)) {
            $browser = new DuckDuckFaviconsBot($agent, []);
        } elseif (preg_match('/ZyBorg/', $agent)) {
            $browser = new WiseNutSearchEngineCrawler($agent, []);
        } elseif (preg_match('/HyperCrawl/', $agent)) {
            $browser = new HyperCrawl($agent, []);
        } elseif (preg_match('/ARCHIVE\.ORG\.UA crawler/', $agent)) {
            $browser = new ArchiveOrgBot($agent, []);
        } elseif (preg_match('/worldwebheritage/', $agent)) {
            $browser = new WorldwebheritageBot($agent, []);
        } elseif (preg_match('/BegunAdvertising/', $agent)) {
            $browser = new BegunAdvertisingBot($agent, []);
        } elseif (preg_match('/TrendWinHttp/', $agent)) {
            $browser = new TrendWinHttp($agent, []);
        } elseif (preg_match('/(winhttp|winhttprequest)/i', $agent)) {
            $browser = new WinHttpRequest($agent, []);
        } elseif (preg_match('/SkypeUriPreview/', $agent)) {
            $browser = new SkypeUriPreview($agent, []);
        } elseif (preg_match('/ScoutJet/', $agent)) {
            $browser = new Scoutjet($agent, []);
        } elseif (preg_match('/Lipperhey\-Kaus\-Australis/', $agent)) {
            $browser = new LipperheyKausAustralis($agent, []);
        } elseif (preg_match('/Digincore bot/', $agent)) {
            $browser = new DigincoreBot($agent, []);
        } elseif (preg_match('/Steeler/', $agent)) {
            $browser = new Steeler($agent, []);
        } elseif (preg_match('/Orangebot/', $agent)) {
            $browser = new Orangebot($agent, []);
        } elseif (preg_match('/Jasmine/', $agent)) {
            $browser = new Jasmine($agent, []);
        } elseif (preg_match('/electricmonk/', $agent)) {
            $browser = new DueDilCrawler($agent, []);
        } elseif (preg_match('/yoozBot/', $agent)) {
            $browser = new YoozBot($agent, []);
        } elseif (preg_match('/online\-webceo\-bot/', $agent)) {
            $browser = new WebceoBot($agent, []);
        } elseif (preg_match('/^Mozilla\/5\.0 \(.*\) Gecko\/.*\/\d+/', $agent)
            && !preg_match('/Netscape/', $agent)
        ) {
            $browser = new Firefox($agent, []);
        } elseif (preg_match('/^Mozilla\/5\.0 \(.*rv:\d+\.\d+.*\) Gecko\/.*\//', $agent)
            && !preg_match('/Netscape/', $agent)
        ) {
            $browser = new Firefox($agent, []);
        } elseif (preg_match('/Netscape/', $agent)) {
            $browser = new Netscape($agent, []);
        } elseif (preg_match('/^Mozilla\/5\.0$/', $agent)) {
            $browser = new UnknownBrowser($agent, []);
        } elseif (preg_match('/Virtuoso/', $agent)) {
            $browser = new Virtuoso($agent, []);
        } elseif (preg_match('/^Mozilla\/(3|4)\.\d+/', $agent, $matches)
            && !preg_match('/(msie|android)/i', $agent, $matches)
        ) {
            $browser = new Netscape($agent, []);
        } elseif (preg_match('/^Dalvik\/\d/', $agent)) {
            $browser = new Dalvik($agent, []);
        } elseif (preg_match('/niki\-bot/', $agent)) {
            $browser = new NikiBot($agent, []);
        } elseif (preg_match('/ContextAd Bot/', $agent)) {
            $browser = new ContextadBot($agent, []);
        } elseif (preg_match('/integrity/', $agent)) {
            $browser = new Integrity($agent, []);
        } elseif (preg_match('/masscan/', $agent)) {
            $browser = new DownloadAccelerator($agent, []);
        } elseif (preg_match('/ZmEu/', $agent)) {
            $browser = new ZmEu($agent, []);
        } elseif (preg_match('/sogou web spider/i', $agent)) {
            $browser = new SogouWebSpider($agent, []);
        } elseif (preg_match('/(OpenWave|UP\.Browser|UP\/)/', $agent)) {
            $browser = new Openwave($agent, []);
        } elseif (preg_match('/(ObigoInternetBrowser|obigo\-browser|Obigo|Teleca)(\/|-)Q(\d+)/', $agent)) {
            $browser = new ObigoQ($agent, []);
        } elseif (preg_match('/(Teleca|Obigo|MIC\/|AU\-MIC)/', $agent)) {
            $browser = new TelecaObigo($agent, []);
        } elseif (preg_match('/DavClnt/', $agent)) {
            $browser = new MicrosoftWebDav($agent, []);
        } elseif (preg_match('/XING\-contenttabreceiver/', $agent)) {
            $browser = new XingContenttabreceiver($agent, []);
        } elseif (preg_match('/Slingstone/', $agent)) {
            $browser = new YahooSlingstone($agent, []);
        } elseif (preg_match('/BOT for JCE/', $agent)) {
            $browser = new BotForJce($agent, []);
        } elseif (preg_match('/Validator\.nu\/LV/', $agent)) {
            $browser = new W3cValidatorNuLv($agent, []);
        } elseif (preg_match('/Curb/', $agent)) {
            $browser = new Curb($agent, []);
        } elseif (preg_match('/link_thumbnailer/', $agent)) {
            $browser = new LinkThumbnailer($agent, []);
        } elseif (preg_match('/Ruby/', $agent)) {
            $browser = new Ruby($agent, []);
        } elseif (preg_match('/securepoint cf/', $agent)) {
            $browser = new SecurepointContentFilter($agent, []);
        } elseif (preg_match('/sogou\-spider/i', $agent)) {
            $browser = new SogouSpider($agent, []);
        } elseif (preg_match('/rankflex/i', $agent)) {
            $browser = new RankFlex($agent, []);
        } elseif (preg_match('/domnutch/i', $agent)) {
            $browser = new Domnutch($agent, []);
        } elseif (preg_match('/discovered/i', $agent)) {
            $browser = new DiscoverEd($agent, []);
        } elseif (preg_match('/nutch/i', $agent)) {
            $browser = new Nutch($agent, []);
        } elseif (preg_match('/boardreader favicon fetcher/i', $agent)) {
            $browser = new BoardReaderFaviconFetcher($agent, []);
        } elseif (preg_match('/checksite verification agent/i', $agent)) {
            $browser = new CheckSiteVerificationAgent($agent, []);
        } elseif (preg_match('/experibot/i', $agent)) {
            $browser = new Experibot($agent, []);
        } elseif (preg_match('/feedblitz/i', $agent)) {
            $browser = new FeedBlitz($agent, []);
        } elseif (preg_match('/rss2html/i', $agent)) {
            $browser = new Rss2Html($agent, []);
        } elseif (preg_match('/feedlyapp/i', $agent)) {
            $browser = new FeedlyApp($agent, []);
        } elseif (preg_match('/genderanalyzer/i', $agent)) {
            $browser = new Genderanalyzer($agent, []);
        } elseif (preg_match('/gooblog/i', $agent)) {
            $browser = new GooBlog($agent, []);
        } elseif (preg_match('/tumblr/i', $agent)) {
            $browser = new TumblrApp($agent, []);
        } elseif (preg_match('/w3c\_i18n\-checker/i', $agent)) {
            $browser = new W3cI18nChecker($agent, []);
        } elseif (preg_match('/w3c\_unicorn/i', $agent)) {
            $browser = new W3cUnicorn($agent, []);
        } elseif (preg_match('/alltop/i', $agent)) {
            $browser = new AlltopApp($agent, []);
        } elseif (preg_match('/internetseer/i', $agent)) {
            $browser = new InternetSeer($agent, []);
        } elseif (preg_match('/ADmantX Platform Semantic Analyzer/', $agent)) {
            $browser = new AdmantxPlatformSemanticAnalyzer($agent, []);
        } elseif (preg_match('/UniversalFeedParser/', $agent)) {
            $browser = new UniversalFeedParser($agent, []);
        } elseif (preg_match('/(binlar|larbin)/i', $agent)) {
            $browser = new Larbin($agent, []);
        } elseif (preg_match('/unityplayer/i', $agent)) {
            $browser = new UnityWebPlayer($agent, []);
        } elseif (preg_match('/WeSEE\:Search/', $agent)) {
            $browser = new WeseeSearch($agent, []);
        } elseif (preg_match('/WeSEE\:Ads/', $agent)) {
            $browser = new WeseeAds($agent, []);
        } elseif (preg_match('/A6\-Indexer/', $agent)) {
            $browser = new A6Indexer($agent, []);
        } elseif (preg_match('/NerdyBot/', $agent)) {
            $browser = new NerdyBot($agent, []);
        } elseif (preg_match('/Peeplo Screenshot Bot/', $agent)) {
            $browser = new PeeploScreenshotBot($agent, []);
        } elseif (preg_match('/CCBot/', $agent)) {
            $browser = new CcBot($agent, []);
        } elseif (preg_match('/visionutils/', $agent)) {
            $browser = new VisionUtils($agent, []);
        } elseif (preg_match('/Feedly/', $agent)) {
            $browser = new Feedly($agent, []);
        } elseif (preg_match('/Photon/', $agent)) {
            $browser = new Photon($agent, []);
        } elseif (preg_match('/WDG\_Validator/', $agent)) {
            $browser = new WdgHtmlValidator($agent, []);
        } elseif (preg_match('/Aboundex/', $agent)) {
            $browser = new Aboundexbot($agent, []);
        } elseif (preg_match('/YisouSpider/', $agent)) {
            $browser = new YisouSpider($agent, []);
        } elseif (preg_match('/hivaBot/', $agent)) {
            $browser = new HivaBot($agent, []);
        } elseif (preg_match('/Comodo Spider/', $agent)) {
            $browser = new ComodoSpider($agent, []);
        } elseif (preg_match('/OpenWebSpider/i', $agent)) {
            $browser = new OpenWebSpider($agent, []);
        } elseif (preg_match('/R6_CommentReader/i', $agent)) {
            $browser = new R6CommentReader($agent, []);
        } elseif (preg_match('/R6_FeedFetcher/i', $agent)) {
            $browser = new R6Feedfetcher($agent, []);
        } elseif (preg_match('/(psbot\-image|psbot\-page)/i', $agent)) {
            $browser = new Picsearchbot($agent, []);
        } elseif (preg_match('/Bloglovin/', $agent)) {
            $browser = new BloglovinBot($agent, []);
        } elseif (preg_match('/viralvideochart/i', $agent)) {
            $browser = new ViralvideochartBot($agent, []);
        } elseif (preg_match('/MetaHeadersBot/', $agent)) {
            $browser = new MetaHeadersBot($agent, []);
        } elseif (preg_match('/Zend\_Http\_Client/', $agent)) {
            $browser = new ZendHttpClient($agent, []);
        } elseif (preg_match('/wget/i', $agent)) {
            $browser = new Wget($agent, []);
        } elseif (preg_match('/Scrapy/', $agent)) {
            $browser = new ScrapyBot($agent, []);
        } elseif (preg_match('/Moozilla/', $agent)) {
            $browser = new Moozilla($agent, []);
        } elseif (preg_match('/AntBot/', $agent)) {
            $browser = new AntBot($agent, []);
        } elseif (preg_match('/Browsershots/', $agent)) {
            $browser = new Browsershots($agent, []);
        } elseif (preg_match('/revolt/', $agent)) {
            $browser = new BotRevolt($agent, []);
        } elseif (preg_match('/pdrlabs/i', $agent)) {
            $browser = new PdrlabsBot($agent, []);
        } elseif (preg_match('/elinks/i', $agent)) {
            $browser = new Elinks($agent, []);
        } elseif (preg_match('/Links/', $agent)) {
            $browser = new Links($agent, []);
        } elseif (preg_match('/Airmail/', $agent)) {
            $browser = new Airmail($agent, []);
        } elseif (preg_match('/SonyEricsson/', $agent)) {
            $browser = new SonyEricsson($agent, []);
        } elseif (preg_match('/WEB\.DE MailCheck/', $agent)) {
            $browser = new WebdeMailCheck($agent, []);
        } elseif (preg_match('/Screaming Frog SEO Spider/', $agent)) {
            $browser = new ScreamingFrogSeoSpider($agent, []);
        } elseif (preg_match('/AndroidDownloadManager/', $agent)) {
            $browser = new AndroidDownloadManager($agent, []);
        } elseif (preg_match('/Go ([\d\.]+) package http/', $agent)) {
            $browser = new GoHttpClient($agent, []);
        } elseif (preg_match('/Go-http-client/', $agent)) {
            $browser = new GoHttpClient($agent, []);
        } elseif (preg_match('/Proxy Gear Pro/', $agent)) {
            $browser = new ProxyGearPro($agent, []);
        } elseif (preg_match('/WAP Browser\/MAUI/', $agent)) {
            $browser = new MauiWapBrowser($agent, []);
        } elseif (preg_match('/Tiny Tiny RSS/', $agent)) {
            $browser = new TinyTinyRss($agent, []);
        } elseif (preg_match('/Readability/', $agent)) {
            $browser = new Readability($agent, []);
        } elseif (preg_match('/NSPlayer/', $agent)) {
            $browser = new WindowsMediaPlayer($agent, []);
        } elseif (preg_match('/Pingdom/', $agent)) {
            $browser = new Pingdom($agent, []);
        } elseif (preg_match('/crazywebcrawler/i', $agent)) {
            $browser = new Crazywebcrawler($agent, []);
        } elseif (preg_match('/GG PeekBot/', $agent)) {
            $browser = new GgPeekBot($agent, []);
        } elseif (preg_match('/iTunes/', $agent)) {
            $browser = new Itunes($agent, []);
        } elseif (preg_match('/LibreOffice/', $agent)) {
            $browser = new LibreOffice($agent, []);
        } elseif (preg_match('/OpenOffice/', $agent)) {
            $browser = new OpenOffice($agent, []);
        } elseif (preg_match('/ThumbnailAgent/', $agent)) {
            $browser = new ThumbnailAgent($agent, []);
        } elseif (preg_match('/LinkStats Bot/', $agent)) {
            $browser = new LinkStatsBot($agent, []);
        } elseif (preg_match('/eZ Publish Link Validator/', $agent)) {
            $browser = new EzPublishLinkValidator($agent, []);
        } elseif (preg_match('/ThumbSniper/', $agent)) {
            $browser = new ThumbSniper($agent, []);
        } elseif (preg_match('/stq\_bot/', $agent)) {
            $browser = new SearchteqBot($agent, []);
        } elseif (preg_match('/SNK Screenshot Bot/', $agent)) {
            $browser = new SnkScreenshotBot($agent, []);
        } elseif (preg_match('/SynHttpClient/', $agent)) {
            $browser = new SynHttpClient($agent, []);
        } elseif (preg_match('/HTTPClient/', $agent)) {
            $browser = new HttpClient($agent, []);
        } elseif (preg_match('/T\-Online Browser/', $agent)) {
            $browser = new TonlineBrowser($agent, []);
        } elseif (preg_match('/ImplisenseBot/', $agent)) {
            $browser = new ImplisenseBot($agent, []);
        } elseif (preg_match('/BuiBui\-Bot/', $agent)) {
            $browser = new BuiBuiBot($agent, []);
        } elseif (preg_match('/thumbshots\-de\-bot/', $agent)) {
            $browser = new ThumbShotsDeBot($agent, []);
        } elseif (preg_match('/python\-requests/', $agent)) {
            $browser = new PythonRequests($agent, []);
        } elseif (preg_match('/Python\-urllib/', $agent)) {
            $browser = new PythonUrlLib($agent, []);
        } elseif (preg_match('/Bot\.AraTurka\.com/', $agent)) {
            $browser = new BotAraTurka($agent, []);
        } elseif (preg_match('/http\_requester/', $agent)) {
            $browser = new HttpRequester($agent, []);
        } elseif (preg_match('/WhatWeb/', $agent)) {
            $browser = new WhatWebWebScanner($agent, []);
        } elseif (preg_match('/isc header collector handlers/', $agent)) {
            $browser = new IscHeaderCollectorHandlers($agent, []);
        } elseif (preg_match('/Thumbor/', $agent)) {
            $browser = new Thumbor($agent, []);
        } elseif (preg_match('/Forum Poster/', $agent)) {
            $browser = new ForumPoster($agent, []);
        } elseif (preg_match('/crawler4j/', $agent)) {
            $browser = new Crawler4j($agent, []);
        } elseif (preg_match('/Facebot/', $agent)) {
            $browser = new FaceBot($agent, []);
        } elseif (preg_match('/NetzCheckBot/', $agent)) {
            $browser = new NetzCheckBot($agent, []);
        } elseif (preg_match('/MIB/', $agent)) {
            $browser = new MotorolaInternetBrowser($agent, []);
        } elseif (preg_match('/facebookscraper/', $agent)) {
            $browser = new Facebookscraper($agent, []);
        } elseif (preg_match('/Zookabot/', $agent)) {
            $browser = new Zookabot($agent, []);
        } elseif (preg_match('/MetaURI/', $agent)) {
            $browser = new MetaUri($agent, []);
        } elseif (preg_match('/FreeWebMonitoring SiteChecker/', $agent)) {
            $browser = new FreeWebMonitoringSiteChecker($agent, []);
        } elseif (preg_match('/IPv4Scan/', $agent)) {
            $browser = new Ipv4Scan($agent, []);
        } elseif (preg_match('/RED/', $agent)) {
            $browser = new Redbot($agent, []);
        } elseif (preg_match('/domainsbot/', $agent)) {
            $browser = new DomainsBot($agent, []);
        } elseif (preg_match('/BUbiNG/', $agent)) {
            $browser = new Bubing($agent, []);
        } elseif (preg_match('/RamblerMail/', $agent)) {
            $browser = new RamblerMail($agent, []);
        } elseif (preg_match('/ichiro\/mobile/', $agent)) {
            $browser = new IchiroMobileBot($agent, []);
        } elseif (preg_match('/ichiro/', $agent)) {
            $browser = new IchiroBot($agent, []);
        } elseif (preg_match('/iisbot/', $agent)) {
            $browser = new IisBot($agent, []);
        } elseif (preg_match('/JoobleBot/', $agent)) {
            $browser = new JoobleBot($agent, []);
        } elseif (preg_match('/Superfeedr bot/', $agent)) {
            $browser = new SuperfeedrBot($agent, []);
        } elseif (preg_match('/FeedBurner/', $agent)) {
            $browser = new FeedBurner($agent, []);
        } elseif (preg_match('/Fastladder/', $agent)) {
            $browser = new FastladderFeedFetcher($agent, []);
        } elseif (preg_match('/livedoor/', $agent)) {
            $browser = new LivedoorFeedFetcher($agent, []);
        } elseif (preg_match('/Icarus6j/', $agent)) {
            $browser = new Icarus6j($agent, []);
        } elseif (preg_match('/wsr\-agent/', $agent)) {
            $browser = new WsrAgent($agent, []);
        } elseif (preg_match('/Blogshares Spiders/', $agent)) {
            $browser = new BlogsharesSpiders($agent, []);
        } elseif (preg_match('/TinEye\-bot/', $agent)) {
            $browser = new TinEyeBot($agent, []);
        } elseif (preg_match('/QuickiWiki/', $agent)) {
            $browser = new QuickiWikiBot($agent, []);
        } elseif (preg_match('/PycURL/', $agent)) {
            $browser = new PyCurl($agent, []);
        } elseif (preg_match('/libcurl\-agent/', $agent)) {
            $browser = new Libcurl($agent, []);
        } elseif (preg_match('/Taproot/', $agent)) {
            $browser = new TaprootBot($agent, []);
        } elseif (preg_match('/GuzzleHttp/', $agent)) {
            $browser = new GuzzleHttpClient($agent, []);
        } elseif (preg_match('/curl/i', $agent)) {
            $browser = new Curl($agent, []);
        } elseif (preg_match('/^PHP/', $agent)) {
            $browser = new Php($agent, []);
        } elseif (preg_match('/Apple\-PubSub/', $agent)) {
            $browser = new ApplePubSub($agent, []);
        } elseif (preg_match('/SimplePie/', $agent)) {
            $browser = new SimplePie($agent, []);
        } elseif (preg_match('/BigBozz/', $agent)) {
            $browser = new BigBozz($agent, []);
        } elseif (preg_match('/ECCP/', $agent)) {
            $browser = new Eccp($agent, []);
        } elseif (preg_match('/facebookexternalhit/', $agent)) {
            $browser = new FacebookExternalHit($agent, []);
        } elseif (preg_match('/GigablastOpenSource/', $agent)) {
            $browser = new GigablastOpenSource($agent, []);
        } elseif (preg_match('/WebIndex/', $agent)) {
            $browser = new WebIndex($agent, []);
        } elseif (preg_match('/Prince/', $agent)) {
            $browser = new Prince($agent, []);
        } elseif (preg_match('/adsense\-snapshot\-google/i', $agent)) {
            $browser = new GoogleAdsenseSnapshot($agent, []);
        } elseif (preg_match('/Amazon CloudFront/', $agent)) {
            $browser = new AmazonCloudFront($agent, []);
        } elseif (preg_match('/bandscraper/', $agent)) {
            $browser = new Bandscraper($agent, []);
        } elseif (preg_match('/bitlybot/', $agent)) {
            $browser = new BitlyBot($agent, []);
        } elseif (preg_match('/^bot$/', $agent)) {
            $browser = new BotBot($agent, []);
        } elseif (preg_match('/cars\-app\-browser/', $agent)) {
            $browser = new CarsAppBrowser($agent, []);
        } elseif (preg_match('/Coursera\-Mobile/', $agent)) {
            $browser = new CourseraMobileApp($agent, []);
        } elseif (preg_match('/Crowsnest/', $agent)) {
            $browser = new CrowsnestMobileApp($agent, []);
        } elseif (preg_match('/Dorado WAP\-Browser/', $agent)) {
            $browser = new DoradoWapBrowser($agent, []);
        } elseif (preg_match('/Goldfire Server/', $agent)) {
            $browser = new GoldfireServer($agent, []);
        } elseif (preg_match('/EventMachine HttpClient/', $agent)) {
            $browser = new EventMachineHttpClient($agent, []);
        } elseif (preg_match('/iBall/', $agent)) {
            $browser = new Iball($agent, []);
        } elseif (preg_match('/InAGist URL Resolver/', $agent)) {
            $browser = new InagistUrlResolver($agent, []);
        } elseif (preg_match('/Jeode/', $agent)) {
            $browser = new Jeode($agent, []);
        } elseif (preg_match('/kraken/', $agent)) {
            $browser = new Krakenjs($agent, []);
        } elseif (preg_match('/com\.linkedin/', $agent)) {
            $browser = new LinkedInBot($agent, []);
        } elseif (preg_match('/LivelapBot/', $agent)) {
            $browser = new LivelapBot($agent, []);
        } elseif (preg_match('/MixBot/', $agent)) {
            $browser = new MixBot($agent, []);
        } elseif (preg_match('/BuSecurityProject/', $agent)) {
            $browser = new BuSecurityProject($agent, []);
        } elseif (preg_match('/PageFreezer/', $agent)) {
            $browser = new PageFreezer($agent, []);
        } elseif (preg_match('/restify/', $agent)) {
            $browser = new Restify($agent, []);
        } elseif (preg_match('/ShowyouBot/', $agent)) {
            $browser = new ShowyouBot($agent, []);
        } elseif (preg_match('/vlc/i', $agent)) {
            $browser = new VlcMediaPlayer($agent, []);
        } elseif (preg_match('/WebRingChecker/', $agent)) {
            $browser = new WebRingChecker($agent, []);
        } elseif (preg_match('/bot\-pge\.chlooe\.com/', $agent)) {
            $browser = new ChlooeBot($agent, []);
        } elseif (preg_match('/seebot/', $agent)) {
            $browser = new SeeBot($agent, []);
        } elseif (preg_match('/ltx71/', $agent)) {
            $browser = new Ltx71($agent, []);
        } elseif (preg_match('/CookieReports/', $agent)) {
            $browser = new CookieReportsBot($agent, []);
        } elseif (preg_match('/Elmer/', $agent)) {
            $browser = new Elmer($agent, []);
        } elseif (preg_match('/Iframely/', $agent)) {
            $browser = new IframelyBot($agent, []);
        } elseif (preg_match('/MetaInspector/', $agent)) {
            $browser = new MetaInspector($agent, []);
        } elseif (preg_match('/Microsoft\-CryptoAPI/', $agent)) {
            $browser = new MicrosoftCryptoApi($agent, []);
        } elseif (preg_match('/OWASP\_SECRET\_BROWSER/', $agent)) {
            $browser = new OwaspSecretBrowser($agent, []);
        } elseif (preg_match('/SMRF URL Expander/', $agent)) {
            $browser = new SmrfUrlExpander($agent, []);
        } elseif (preg_match('/Speedy Spider/', $agent)) {
            $browser = new Entireweb($agent, []);
        } elseif (preg_match('/kizasi\-spider/', $agent)) {
            $browser = new Kizasispider($agent, []);
        } elseif (preg_match('/Superarama\.com \- BOT/', $agent)) {
            $browser = new SuperaramaComBot($agent, []);
        } elseif (preg_match('/WNMbot/', $agent)) {
            $browser = new Wnmbot($agent, []);
        } elseif (preg_match('/Website Explorer/', $agent)) {
            $browser = new WebsiteExplorer($agent, []);
        } elseif (preg_match('/city\-map screenshot service/', $agent)) {
            $browser = new CitymapScreenshotService($agent, []);
        } elseif (preg_match('/gosquared\-thumbnailer/', $agent)) {
            $browser = new GosquaredThumbnailer($agent, []);
        } elseif (preg_match('/optivo\(R\) NetHelper/', $agent)) {
            $browser = new OptivoNetHelper($agent, []);
        } elseif (preg_match('/pr\-cy\.ru Screenshot Bot/', $agent)) {
            $browser = new ScreenshotBot($agent, []);
        } elseif (preg_match('/Cyberduck/', $agent)) {
            $browser = new Cyberduck($agent, []);
        } elseif (preg_match('/Lynx/', $agent)) {
            $browser = new Lynx($agent, []);
        } elseif (preg_match('/AccServer/', $agent)) {
            $browser = new AccServer($agent, []);
        } elseif (preg_match('/SafeSearch microdata crawler/', $agent)) {
            $browser = new SafeSearchMicrodataCrawler($agent, []);
        } elseif (preg_match('/iZSearch/', $agent)) {
            $browser = new IzSearchBot($agent, []);
        } elseif (preg_match('/NetLyzer FastProbe/', $agent)) {
            $browser = new NetLyzerFastProbe($agent, []);
        } elseif (preg_match('/MnoGoSearch/', $agent)) {
            $browser = new MnogoSearch($agent, []);
        } elseif (preg_match('/uipbot/', $agent)) {
            $browser = new Uipbot($agent, []);
        } elseif (preg_match('/mbot/', $agent)) {
            $browser = new Mbot($agent, []);
        } elseif (preg_match('/MS Web Services Client Protocol/', $agent)) {
            $browser = new MicrosoftDotNetFrameworkClr($agent, []);
        } elseif (preg_match('/(AtomicBrowser|AtomicLite)/', $agent)) {
            $browser = new AtomicBrowser($agent, []);
        } elseif (preg_match('/AppEngine\-Google/', $agent)) {
            $browser = new GoogleAppEngine($agent, []);
        } elseif (preg_match('/Feedfetcher\-Google/', $agent)) {
            $browser = new GoogleFeedfetcher($agent, []);
        } elseif (preg_match('/Google/', $agent)) {
            $browser = new GoogleApp($agent, []);
        } elseif (preg_match('/UnwindFetchor/', $agent)) {
            $browser = new UnwindFetchor($agent, []);
        } elseif (preg_match('/Perfect%20Browser/', $agent)) {
            $browser = new PerfectBrowser($agent, []);
        } elseif (preg_match('/Reeder/', $agent)) {
            $browser = new Reeder($agent, []);
        } elseif (preg_match('/FastBrowser/', $agent)) {
            $browser = new FastBrowser($agent, []);
        } elseif (preg_match('/CFNetwork/', $agent)) {
            $browser = new CfNetwork($agent, []);
        } elseif (preg_match('/Y\!J\-(ASR|BSC)/', $agent)) {
            $browser = new YahooJapan($agent, []);
        } elseif (preg_match('/test certificate info/', $agent)) {
            $browser = new TestCertificateInfo($agent, []);
        } elseif (preg_match('/fastbot crawler/', $agent)) {
            $browser = new FastbotCrawler($agent, []);
        } elseif (preg_match('/Riddler/', $agent)) {
            $browser = new Riddler($agent, []);
        } elseif (preg_match('/SophosUpdateManager/', $agent)) {
            $browser = new SophosUpdateManager($agent, []);
        } elseif (preg_match('/(Debian|Ubuntu) APT\-HTTP/', $agent)) {
            $browser = new AptHttpTransport($agent, []);
        } elseif (preg_match('/urlgrabber/', $agent)) {
            $browser = new UrlGrabber($agent, []);
        } elseif (preg_match('/UCS \(ESX\)/', $agent)) {
            $browser = new UniventionCorporateServer($agent, []);
        } elseif (preg_match('/libwww\-perl/', $agent)) {
            $browser = new Libwww($agent, []);
        } elseif (preg_match('/OpenBSD ftp/', $agent)) {
            $browser = new OpenBsdFtp($agent, []);
        } elseif (preg_match('/SophosAgent/', $agent)) {
            $browser = new SophosAgent($agent, []);
        } elseif (preg_match('/jupdate/', $agent)) {
            $browser = new Jupdate($agent, []);
        } elseif (preg_match('/Roku\/DVP/', $agent)) {
            $browser = new RokuDvp($agent, []);
        } elseif (preg_match('/VocusBot/', $agent)) {
            $browser = new VocusBot($agent, []);
        } elseif (preg_match('/PostRank/', $agent)) {
            $browser = new PostRank($agent, []);
        } elseif (preg_match('/rogerbot/i', $agent)) {
            $browser = new Rogerbot($agent, []);
        } elseif (preg_match('/Safeassign/', $agent)) {
            $browser = new Safeassign($agent, []);
        } elseif (preg_match('/ExaleadCloudView/', $agent)) {
            $browser = new ExaleadCloudView($agent, []);
        } elseif (preg_match('/Typhoeus/', $agent)) {
            $browser = new Typhoeus($agent, []);
        } elseif (preg_match('/Camo Asset Proxy/', $agent)) {
            $browser = new CamoAssetProxy($agent, []);
        } elseif (preg_match('/YahooCacheSystem/', $agent)) {
            $browser = new YahooCacheSystem($agent, []);
        } elseif (preg_match('/wmtips\.com/', $agent)) {
            $browser = new WebmasterTipsBot($agent, []);
        } elseif (preg_match('/linkCheck/', $agent)) {
            $browser = new LinkCheck($agent, []);
        } elseif (preg_match('/ABrowse/', $agent)) {
            $browser = new Abrowse($agent, []);
        } elseif (preg_match('/GWPImages/', $agent)) {
            $browser = new GwpImages($agent, []);
        } elseif (preg_match('/NoteTextView/', $agent)) {
            $browser = new NoteTextView($agent, []);
        } elseif (preg_match('/NING/', $agent)) {
            $browser = new Ning($agent, []);
        } elseif (preg_match('/Sprinklr/', $agent)) {
            $browser = new SprinklrBot($agent, []);
        } elseif (preg_match('/URLChecker/', $agent)) {
            $browser = new UrlChecker($agent, []);
        } elseif (preg_match('/newsme/', $agent)) {
            $browser = new NewsMe($agent, []);
        } elseif (preg_match('/Traackr/', $agent)) {
            $browser = new Traackr($agent, []);
        } elseif (preg_match('/nineconnections/', $agent)) {
            $browser = new NineConnections($agent, []);
        } elseif (preg_match('/Xenu Link Sleuth/', $agent)) {
            $browser = new XenusLinkSleuth($agent, []);
        } elseif (preg_match('/superagent/', $agent)) {
            $browser = new Superagent($agent, []);
        } elseif (preg_match('/Goose/', $agent)) {
            $browser = new GooseExtractor($agent, []);
        } elseif (preg_match('/AHC/', $agent)) {
            $browser = new AsynchronousHttpClient($agent, []);
        } elseif (preg_match('/newspaper/', $agent)) {
            $browser = new Newspaper($agent, []);
        } elseif (preg_match('/Hatena::Bookmark/', $agent)) {
            $browser = new HatenaBookmark($agent, []);
        } elseif (preg_match('/EasyBib AutoCite/', $agent)) {
            $browser = new EasyBibAutoCite($agent, []);
        } elseif (preg_match('/ShortLinkTranslate/', $agent)) {
            $browser = new ShortLinkTranslate($agent, []);
        } elseif (preg_match('/Marketing Grader/', $agent)) {
            $browser = new MarketingGrader($agent, []);
        } elseif (preg_match('/Grammarly/', $agent)) {
            $browser = new Grammarly($agent, []);
        } elseif (preg_match('/Dispatch/', $agent)) {
            $browser = new Dispatch($agent, []);
        } elseif (preg_match('/Raven Link Checker/', $agent)) {
            $browser = new RavenLinkChecker($agent, []);
        } elseif (preg_match('/http\-kit/', $agent)) {
            $browser = new HttpKit($agent, []);
        } elseif (preg_match('/sfFeedReader/', $agent)) {
            $browser = new SymfonyRssReader($agent, []);
        } elseif (preg_match('/Twikle/', $agent)) {
            $browser = new TwikleBot($agent, []);
        } elseif (preg_match('/node\-fetch/', $agent)) {
            $browser = new NodeFetch($agent, []);
        } elseif (preg_match('/BrokenLinkCheck\.com/', $agent)) {
            $browser = new BrokenLinkCheck($agent, []);
        } elseif (preg_match('/BCKLINKS/', $agent)) {
            $browser = new BckLinks($agent, []);
        } elseif (preg_match('/Faraday/', $agent)) {
            $browser = new Faraday($agent, []);
        } elseif (preg_match('/gettor/', $agent)) {
            $browser = new Gettor($agent, []);
        } elseif (preg_match('/SEOstats/', $agent)) {
            $browser = new SeoStats($agent, []);
        } elseif (preg_match('/ZnajdzFoto\/Image/', $agent)) {
            $browser = new ZnajdzFotoImageBot($agent, []);
        } elseif (preg_match('/infoX\-WISG/', $agent)) {
            $browser = new InfoxWisg($agent, []);
        } elseif (preg_match('/wscheck\.com/', $agent)) {
            $browser = new WscheckBot($agent, []);
        } elseif (preg_match('/Tweetminster/', $agent)) {
            $browser = new TweetminsterBot($agent, []);
        } elseif (preg_match('/Astute SRM/', $agent)) {
            $browser = new AstuteSocial($agent, []);
        } elseif (preg_match('/LongURL API/', $agent)) {
            $browser = new LongUrlBot($agent, []);
        } elseif (preg_match('/Trove/', $agent)) {
            $browser = new TroveBot($agent, []);
        } elseif (preg_match('/Melvil Favicon/', $agent)) {
            $browser = new MelvilFaviconBot($agent, []);
        } elseif (preg_match('/Melvil/', $agent)) {
            $browser = new MelvilBot($agent, []);
        } elseif (preg_match('/Pearltrees/', $agent)) {
            $browser = new PearltreesBot($agent, []);
        } elseif (preg_match('/Svven\-Summarizer/', $agent)) {
            $browser = new SvvenSummarizerBot($agent, []);
        } elseif (preg_match('/Athena Site Analyzer/', $agent)) {
            $browser = new AthenaSiteAnalyzer($agent, []);
        } elseif (preg_match('/Exploratodo/', $agent)) {
            $browser = new ExploratodoBot($agent, []);
        } elseif (preg_match('/WhatsApp/', $agent)) {
            $browser = new WhatsApp($agent, []);
        } elseif (preg_match('/DDG\-Android\-/', $agent)) {
            $browser = new DuckDuckApp($agent, []);
        } elseif (preg_match('/WebCorp/', $agent)) {
            $browser = new WebCorp($agent, []);
        } elseif (preg_match('/ROR Sitemap Generator/', $agent)) {
            $browser = new RorSitemapGenerator($agent, []);
        } elseif (preg_match('/AuditMyPC Webmaster Tool/', $agent)) {
            $browser = new AuditmypcWebmasterTool($agent, []);
        } elseif (preg_match('/XmlSitemapGenerator/', $agent)) {
            $browser = new XmlSitemapGenerator($agent, []);
        } elseif (preg_match('/Stratagems Kumo/', $agent)) {
            $browser = new StratagemsKumo($agent, []);
        } elseif (preg_match('/YOURLS/', $agent)) {
            $browser = new Yourls($agent, []);
        } elseif (preg_match('/Embed PHP Library/', $agent)) {
            $browser = new EmbedPhpLibrary($agent, []);
        } elseif (preg_match('/SPIP/', $agent)) {
            $browser = new Spip($agent, []);
        } elseif (preg_match('/Friendica/', $agent)) {
            $browser = new Friendica($agent, []);
        } elseif (preg_match('/MagpieRSS/', $agent)) {
            $browser = new MagpieRss($agent, []);
        } elseif (preg_match('/Short URL Checker/', $agent)) {
            $browser = new ShortUrlChecker($agent, []);
        } elseif (preg_match('/webnumbrFetcher/', $agent)) {
            $browser = new WebnumbrFetcher($agent, []);
        } elseif (preg_match('/(WAP Browser|Spice QT\-75|KKT20\/MIDP)/', $agent)) {
            $browser = new WapBrowser($agent, []);
        } elseif (preg_match('/java/i', $agent)) {
            $browser = new JavaStandardLibrary($agent, []);
        } elseif (preg_match('/(unister\-test|unistertesting|unister\-https\-test)/i', $agent)) {
            $browser = new UnisterTesting($agent, []);
        } else {
            $browser = new UnknownBrowser($agent, []);
        }

        return $browser;
    }
}
