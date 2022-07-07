# Cielo24\JobApi

All URIs are relative to https://api.cielo24.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMediaFile()**](JobApi.md#addMediaFile) | **POST** /job/add_media | 
[**addMediaUrl()**](JobApi.md#addMediaUrl) | **GET** /job/add_media | 
[**authorizeJob()**](JobApi.md#authorizeJob) | **POST** /job/authorize | 
[**getCaption()**](JobApi.md#getCaption) | **GET** /job/get_caption | 
[**jobInfo()**](JobApi.md#jobInfo) | **GET** /job/info | 
[**newJob()**](JobApi.md#newJob) | **POST** /job/new | 
[**performTranscription()**](JobApi.md#performTranscription) | **POST** /job/perform_transcription | 
[**performTranslation()**](JobApi.md#performTranslation) | **POST** /job/translate | 


## `addMediaFile()`

```php
addMediaFile($v, $job_id, $content_length, $body, $is_duplicate): \Cielo24\Model\AddMediaResponse
```



Add a piece of media to an existing job using a local file. No content-type should be included in the HTTP header. The media should be uploaded as raw binary, no encoding (base64, hex, etc) is required. Chunk-transfer encoding is NOT supported. File size is limited to 10 gb

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$job_id = 0fbd6015910e42dca25a863c4925d77c; // string
$content_length = 56; // int
$body = "/path/to/file.txt"; // \SplFileObject
$is_duplicate = 'false'; // string

try {
    $result = $apiInstance->addMediaFile($v, $job_id, $content_length, $body, $is_duplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->addMediaFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **job_id** | **string**|  |
 **content_length** | **int**|  |
 **body** | **\SplFileObject****\SplFileObject**|  |
 **is_duplicate** | **string**|  | [optional] [default to &#39;false&#39;]

### Return type

[**\Cielo24\Model\AddMediaResponse**](../Model/AddMediaResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `video/mp4`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addMediaUrl()`

```php
addMediaUrl($v, $job_id, $media_url, $is_duplicate): \Cielo24\Model\AddMediaResponse
```



Add a piece of media to an existing job using a public media url. A job may only have a single piece of media associated with it, attempting to add additional media will return an error code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$job_id = 0fbd6015910e42dca25a863c4925d77c; // string
$media_url = http://www.domain.com/video.mp4; // string
$is_duplicate = 'false'; // string

try {
    $result = $apiInstance->addMediaUrl($v, $job_id, $media_url, $is_duplicate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->addMediaUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **job_id** | **string**|  |
 **media_url** | **string**|  |
 **is_duplicate** | **string**|  | [optional] [default to &#39;false&#39;]

### Return type

[**\Cielo24\Model\AddMediaResponse**](../Model/AddMediaResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authorizeJob()`

```php
authorizeJob($v, $job_id)
```



Authorize an existing job. If your account has the \"customer authorization\" feature enabled (it is not enabled by default) jobs you create will be held in the \"Authorizing\" state until you call this method. Calling this method on a job that is not the \"Authorizing\" state has no effect and will return success. Please contact support@cielo24.com to enable the \"customer authorization\" feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$job_id = 0fbd6015910e42dca25a863c4925d77c; // string

try {
    $apiInstance->authorizeJob($v, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->authorizeJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **job_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCaption()`

```php
getCaption($v, $job_id, $caption_format, $build_url, $caption_words_min, $caption_by_sentence, $characters_per_caption_line, $dfxp_header, $disallow_dangling, $display_effects_speaker_as, $display_speaker_id, $iwp_name, $elementlist_version, $emit_speaker_change_tokens_as, $force_case, $include_dfxp_metadata, $layout_target_caption_length_ms, $line_break_on_sentence, $line_ending_format, $lines_per_caption, $mask_profanity, $maximum_caption_duration, $merge_gap_interval, $minimum_caption_length_ms, $minimum_gap_between_captions_ms, $qt_seamless, $remove_disfluencies, $remove_sounds_list, $remove_sound_references, $replace_slang, $silence_max_ms, $single_speaker_per_caption, $sound_boundaries, $sound_threshold, $sound_tokens_by_caption, $sound_tokens_by_line, $sound_tokens_by_caption_list, $sound_tokens_by_line_list, $speaker_on_new_line, $srt_format, $strip_square_brackets, $utf8_mark, $replace_english_spelling): string
```



Get the caption file for a job. The job must have completed transcription before a caption can be downloaded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$job_id = 0fbd6015910e42dca25a863c4925d77c; // string
$caption_format = SRT; // string
$build_url = false; // string | Rather than returning the file, return a permanent URL to the file.
$caption_words_min = 3; // int | Minimum number of words allowed in a caption.
$caption_by_sentence = false; // string | When true, puts each sentence into its own caption. When false, more than one sentence may appear in a single caption.
$characters_per_caption_line = 30; // int | Maximum number of characters to be displayed on each caption line.
$dfxp_header = <head></head>; // string | Allows you to specify a custom header for your DFXP caption file. The header should be the entire contents of the header including the opening and closing tags. Ignored if caption_format does not equal DFXP.
$disallow_dangling = true; // string | Will prevent captions from having the last word in a sentence start a new line. Last words will ALWAYS be kept on the same line, even if it breaks the characters_per_caption_line option.
$display_effects_speaker_as = Sounds; // string | Determines what speaker name should used for sound effects.
$display_speaker_id = number; // string | Determines the way speakers are identified in the captions. Choose \"no\" to not display speaker identities at all: \">> example\" Choose \"number\" to display only the speaker number: \">> Speaker 1: example\" Choose \"name\" to display the speaker name: \">> John Doe: example\". If you choose \"name\", the speaker number will be displayed if the name is not available.
$iwp_name = MECHANICAL; // string | The named version of element list to generate the transcript from. If not specified, the transcript will be generated from the latest version.
$elementlist_version = 2014-07-31T12:35:52.324389; // string | The version of element list to generate the captions from. If not specified, the caption will be generated from the latest version. (ISO 8601 Date String)
$emit_speaker_change_tokens_as = -->; // string | Determine what characters to use to denote speaker changes.
$force_case = lower; // string | Force the contents of the captions to be all UPPER or lower case. If blank, the case of the captions is not changed.
$include_dfxp_metadata = false; // string | When true, and the caption format requested is DFXP, the jobs name, ID and language will be added to the DFXP metadata header. When false, these data are omitted from the header. Ignored if caption_format does not equal DFXP.
$layout_target_caption_length_ms = 4000; // int | Captions generated will, on average, be this duration. However, they may vary significantly based on other parameters you set.
$line_break_on_sentence = true; // string | Inserts a line break in between sentences that are in the same caption.
$line_ending_format = OSX; // string | Determine the end of line (EOL) character to use for the captions.
$lines_per_caption = 3; // int | Number of lines to be displayed for each caption.
$mask_profanity = true; // string | Replace profanity with asterisks.
$maximum_caption_duration = 10000; // int | No captions longer than this (in milliseconds) will be produced. If not specified, there is no maximum.
$merge_gap_interval = 1500; // int | Captions with a gap between them that is smaller than this (in milliseconds) will have their start and/or end times changed so there is no time gap between the captions.
$minimum_caption_length_ms = 1500; // int | Extends the duration of short captions to the this minimum length. Additional time is taken from later caption blocks to meet this minimum time.
$minimum_gap_between_captions_ms = 100; // int | Adds a minimum time between captions such as there will always be some time between captions where no text is displayed. When captions are very close together, time will be removed from the caption duration to make the gap.
$qt_seamless = true; // string | Does not put time gaps of any kind between caption blocks. Ignored if caption_format does not equal QT.
$remove_disfluencies = false; // string | Remove verbal disfluencies from the generated transcript. Common disfluencies such as \"um\" and \"ah\" are removed while maintaining appropriate punctuation.
$remove_sounds_list = ["MUSIC","LAUGH"]; // string[] | A list of sounds to not show in the caption. This is a JSON style list, and should look like [\"MUSIC\", \"LAUGH\"]. Ignored if remove_sound_references is true.
$remove_sound_references = false; // string | Remove ALL non-verbal sound and noise references from the generated transcript. Sounds and unidentified noises are depicted in the caption as [SOUND], [COUGH] and [NOISE]. If this parameter is set, these identifiers are omitted from the caption.
$replace_slang = true; // string | Replace common slang terms from the generated transcript. Common replacements are \"want to\" for \"wanna\", \"going to\" for \"gonna\", etc.
$silence_max_ms = 1000; // int | If there is a interval of silence in the middle of a sentence longer than this, then the caption will be split.
$single_speaker_per_caption = false; // string | When true, puts each speaker into its own caption. When false, more than one speaker may appear in a single caption.
$sound_boundaries = ["(",")"]; // string[] | Specifies the characters to surround sound references with. The default will generate sound references that look like this: [MUSIC].
$sound_threshold = 5000; // int | Sound references that are longer than this threshold will be made their own caption entirely, and will not have any text included with them. If not set, Sound references will be included back to back with text no matter the duration of the sound.
$sound_tokens_by_caption = true; // string | If true, all sound references will always be in their own caption. If false, more than one sound reference may appear in a single caption.
$sound_tokens_by_line = true; // string | If true, all sound references will always be in their own line. If false, more than one sound reference may appear in a single line.
$sound_tokens_by_caption_list = []; // string[] | If non-empty, the specified sound references will always be in their own caption. If empty, more than one sound reference may appear in a single caption. Ignored if sound_tokens_by_caption is true.
$sound_tokens_by_line_list = ["NOISE"]; // string[] | If non-empty, the specified sound references will always be in their own line. If empty, more than one sound reference may appear in a single line. Ignored if sound_tokens_by_line is true.
$speaker_on_new_line = false; // string | If true, a speaker change will cause a new caption to be made. If false, multiple speakers may appear in a single caption.
$srt_format = {caption_number:d}\n{start_hour:02d}:{start_minute:02d}:{start_second:02d},{start_millisecond:03d} -->{end_hour:02d}:{end_minute:02d}:{end_second:02d},{end_millisecond:03d}\n{caption_text}\n\n; // string | If the caption format is SRT, determines what the caption blocks will look like. The default, prints caption blocks that look like this:    1:   00:00:06,060 --> 00:00:16,060   This is the caption text.  You can alter the caption block by re-arranging or removing the substitution string values, shown enclosed in braces \"{}\" in the default value below. Substitution strings may used more than once if desired. Any text that is not a substitution string will be displayed as written. To add new lines, include a \\n. Note, you may need to escape the \\n with an extra backslash when encoding the request.
$strip_square_brackets = true; // string | Removes all square brackets like '[' or ']' from captions. By default square brackets surround sound references like '[MUSIC]', but they may exist as part of the caption text as well.
$utf8_mark = true; // string | Adds a utf8 bytemark to the beginning of the caption. This should only be used if the system you are loading the caption files into needs a byte marker. The vast majority of systems do not.
$replace_english_spelling = B; // string | Replaces English spelling with location accurate spelling. i.e. Color --> Colour  A: American  B: British  Z: British ize  U: Australian  C: Canadian

try {
    $result = $apiInstance->getCaption($v, $job_id, $caption_format, $build_url, $caption_words_min, $caption_by_sentence, $characters_per_caption_line, $dfxp_header, $disallow_dangling, $display_effects_speaker_as, $display_speaker_id, $iwp_name, $elementlist_version, $emit_speaker_change_tokens_as, $force_case, $include_dfxp_metadata, $layout_target_caption_length_ms, $line_break_on_sentence, $line_ending_format, $lines_per_caption, $mask_profanity, $maximum_caption_duration, $merge_gap_interval, $minimum_caption_length_ms, $minimum_gap_between_captions_ms, $qt_seamless, $remove_disfluencies, $remove_sounds_list, $remove_sound_references, $replace_slang, $silence_max_ms, $single_speaker_per_caption, $sound_boundaries, $sound_threshold, $sound_tokens_by_caption, $sound_tokens_by_line, $sound_tokens_by_caption_list, $sound_tokens_by_line_list, $speaker_on_new_line, $srt_format, $strip_square_brackets, $utf8_mark, $replace_english_spelling);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getCaption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **job_id** | **string**|  |
 **caption_format** | **string**|  |
 **build_url** | **string**| Rather than returning the file, return a permanent URL to the file. | [optional] [default to &#39;false&#39;]
 **caption_words_min** | **int**| Minimum number of words allowed in a caption. | [optional] [default to 1]
 **caption_by_sentence** | **string**| When true, puts each sentence into its own caption. When false, more than one sentence may appear in a single caption. | [optional] [default to &#39;true&#39;]
 **characters_per_caption_line** | **int**| Maximum number of characters to be displayed on each caption line. | [optional] [default to 42]
 **dfxp_header** | **string**| Allows you to specify a custom header for your DFXP caption file. The header should be the entire contents of the header including the opening and closing tags. Ignored if caption_format does not equal DFXP. | [optional] [default to &#39;&#39;]
 **disallow_dangling** | **string**| Will prevent captions from having the last word in a sentence start a new line. Last words will ALWAYS be kept on the same line, even if it breaks the characters_per_caption_line option. | [optional] [default to &#39;false&#39;]
 **display_effects_speaker_as** | **string**| Determines what speaker name should used for sound effects. | [optional] [default to &#39;Effects&#39;]
 **display_speaker_id** | **string**| Determines the way speakers are identified in the captions. Choose \&quot;no\&quot; to not display speaker identities at all: \&quot;&gt;&gt; example\&quot; Choose \&quot;number\&quot; to display only the speaker number: \&quot;&gt;&gt; Speaker 1: example\&quot; Choose \&quot;name\&quot; to display the speaker name: \&quot;&gt;&gt; John Doe: example\&quot;. If you choose \&quot;name\&quot;, the speaker number will be displayed if the name is not available. | [optional] [default to &#39;name&#39;]
 **iwp_name** | **string**| The named version of element list to generate the transcript from. If not specified, the transcript will be generated from the latest version. | [optional] [default to &#39;&#39;]
 **elementlist_version** | **string**| The version of element list to generate the captions from. If not specified, the caption will be generated from the latest version. (ISO 8601 Date String) | [optional] [default to &#39;&#39;]
 **emit_speaker_change_tokens_as** | **string**| Determine what characters to use to denote speaker changes. | [optional] [default to &#39;&gt;&gt;&#39;]
 **force_case** | **string**| Force the contents of the captions to be all UPPER or lower case. If blank, the case of the captions is not changed. | [optional] [default to &#39;&#39;]
 **include_dfxp_metadata** | **string**| When true, and the caption format requested is DFXP, the jobs name, ID and language will be added to the DFXP metadata header. When false, these data are omitted from the header. Ignored if caption_format does not equal DFXP. | [optional] [default to &#39;true&#39;]
 **layout_target_caption_length_ms** | **int**| Captions generated will, on average, be this duration. However, they may vary significantly based on other parameters you set. | [optional] [default to 5000]
 **line_break_on_sentence** | **string**| Inserts a line break in between sentences that are in the same caption. | [optional] [default to &#39;false&#39;]
 **line_ending_format** | **string**| Determine the end of line (EOL) character to use for the captions. | [optional] [default to &#39;UNIX&#39;]
 **lines_per_caption** | **int**| Number of lines to be displayed for each caption. | [optional] [default to 2]
 **mask_profanity** | **string**| Replace profanity with asterisks. | [optional] [default to &#39;false&#39;]
 **maximum_caption_duration** | **int**| No captions longer than this (in milliseconds) will be produced. If not specified, there is no maximum. | [optional]
 **merge_gap_interval** | **int**| Captions with a gap between them that is smaller than this (in milliseconds) will have their start and/or end times changed so there is no time gap between the captions. | [optional] [default to 1000]
 **minimum_caption_length_ms** | **int**| Extends the duration of short captions to the this minimum length. Additional time is taken from later caption blocks to meet this minimum time. | [optional]
 **minimum_gap_between_captions_ms** | **int**| Adds a minimum time between captions such as there will always be some time between captions where no text is displayed. When captions are very close together, time will be removed from the caption duration to make the gap. | [optional]
 **qt_seamless** | **string**| Does not put time gaps of any kind between caption blocks. Ignored if caption_format does not equal QT. | [optional] [default to &#39;false&#39;]
 **remove_disfluencies** | **string**| Remove verbal disfluencies from the generated transcript. Common disfluencies such as \&quot;um\&quot; and \&quot;ah\&quot; are removed while maintaining appropriate punctuation. | [optional] [default to &#39;true&#39;]
 **remove_sounds_list** | [**string[]**](../Model/string.md)| A list of sounds to not show in the caption. This is a JSON style list, and should look like [\&quot;MUSIC\&quot;, \&quot;LAUGH\&quot;]. Ignored if remove_sound_references is true. | [optional]
 **remove_sound_references** | **string**| Remove ALL non-verbal sound and noise references from the generated transcript. Sounds and unidentified noises are depicted in the caption as [SOUND], [COUGH] and [NOISE]. If this parameter is set, these identifiers are omitted from the caption. | [optional] [default to &#39;true&#39;]
 **replace_slang** | **string**| Replace common slang terms from the generated transcript. Common replacements are \&quot;want to\&quot; for \&quot;wanna\&quot;, \&quot;going to\&quot; for \&quot;gonna\&quot;, etc. | [optional] [default to &#39;false&#39;]
 **silence_max_ms** | **int**| If there is a interval of silence in the middle of a sentence longer than this, then the caption will be split. | [optional] [default to 2000]
 **single_speaker_per_caption** | **string**| When true, puts each speaker into its own caption. When false, more than one speaker may appear in a single caption. | [optional] [default to &#39;true&#39;]
 **sound_boundaries** | [**string[]**](../Model/string.md)| Specifies the characters to surround sound references with. The default will generate sound references that look like this: [MUSIC]. | [optional]
 **sound_threshold** | **int**| Sound references that are longer than this threshold will be made their own caption entirely, and will not have any text included with them. If not set, Sound references will be included back to back with text no matter the duration of the sound. | [optional]
 **sound_tokens_by_caption** | **string**| If true, all sound references will always be in their own caption. If false, more than one sound reference may appear in a single caption. | [optional] [default to &#39;false&#39;]
 **sound_tokens_by_line** | **string**| If true, all sound references will always be in their own line. If false, more than one sound reference may appear in a single line. | [optional] [default to &#39;false&#39;]
 **sound_tokens_by_caption_list** | [**string[]**](../Model/string.md)| If non-empty, the specified sound references will always be in their own caption. If empty, more than one sound reference may appear in a single caption. Ignored if sound_tokens_by_caption is true. | [optional]
 **sound_tokens_by_line_list** | [**string[]**](../Model/string.md)| If non-empty, the specified sound references will always be in their own line. If empty, more than one sound reference may appear in a single line. Ignored if sound_tokens_by_line is true. | [optional]
 **speaker_on_new_line** | **string**| If true, a speaker change will cause a new caption to be made. If false, multiple speakers may appear in a single caption. | [optional] [default to &#39;true&#39;]
 **srt_format** | **string**| If the caption format is SRT, determines what the caption blocks will look like. The default, prints caption blocks that look like this:    1:   00:00:06,060 --&gt; 00:00:16,060   This is the caption text.  You can alter the caption block by re-arranging or removing the substitution string values, shown enclosed in braces \&quot;{}\&quot; in the default value below. Substitution strings may used more than once if desired. Any text that is not a substitution string will be displayed as written. To add new lines, include a \\n. Note, you may need to escape the \\n with an extra backslash when encoding the request. | [optional] [default to &#39;{caption_number:d}\n{start_hour:02d}:{start_minute:02d}:{start_second:02d},{start_millisecond:03d} --&gt;{end_hour:02d}:{end_minute:02d}:{end_second:02d},{end_millisecond:03d}\n{caption_text}\n\n&#39;]
 **strip_square_brackets** | **string**| Removes all square brackets like &#39;[&#39; or &#39;]&#39; from captions. By default square brackets surround sound references like &#39;[MUSIC]&#39;, but they may exist as part of the caption text as well. | [optional] [default to &#39;false&#39;]
 **utf8_mark** | **string**| Adds a utf8 bytemark to the beginning of the caption. This should only be used if the system you are loading the caption files into needs a byte marker. The vast majority of systems do not. | [optional] [default to &#39;false&#39;]
 **replace_english_spelling** | **string**| Replaces English spelling with location accurate spelling. i.e. Color --&gt; Colour  A: American  B: British  Z: British ize  U: Australian  C: Canadian | [optional] [default to &#39;A&#39;]

### Return type

**string**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobInfo()`

```php
jobInfo($v, $job_id): \Cielo24\Model\JobInfoResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$job_id = 0fbd6015910e42dca25a863c4925d77c; // string

try {
    $result = $apiInstance->jobInfo($v, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **job_id** | **string**|  |

### Return type

[**\Cielo24\Model\JobInfoResponse**](../Model/JobInfoResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newJob()`

```php
newJob($v, $new_job_body): \Cielo24\Model\NewJobResponse
```



Create a new job. A job is a container into which you can upload media and request that transcription be performed. Creating a job is prerequisite for virtually all other methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$new_job_body = new \Cielo24\Model\NewJobBody(); // \Cielo24\Model\NewJobBody

try {
    $result = $apiInstance->newJob($v, $new_job_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->newJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **new_job_body** | [**\Cielo24\Model\NewJobBody**](../Model/NewJobBody.md)|  |

### Return type

[**\Cielo24\Model\NewJobResponse**](../Model/NewJobResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performTranscription()`

```php
performTranscription($v, $perform_transcription_body): \Cielo24\Model\PerformTranscriptionResponse
```



Request that transcription be performed on the specified job. A callback URL, if specified, will be called when the transcription is complete. See [callback documentation](https://cielo24.readthedocs.io/en/latest/basics.html#callbacks-label) for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$perform_transcription_body = new \Cielo24\Model\PerformTranscriptionBody(); // \Cielo24\Model\PerformTranscriptionBody

try {
    $result = $apiInstance->performTranscription($v, $perform_transcription_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->performTranscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **perform_transcription_body** | [**\Cielo24\Model\PerformTranscriptionBody**](../Model/PerformTranscriptionBody.md)|  |

### Return type

[**\Cielo24\Model\PerformTranscriptionResponse**](../Model/PerformTranscriptionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performTranslation()`

```php
performTranslation($v, $job_id, $target_languages, $approve_uplevel): \Cielo24\Model\PerformTranslationResponse
```



Request that orders a new Translation language for a video that has been previously Transcribed and/or Translated. The New Job ID and job target language will be returned upon completion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int
$job_id = 0fbd6015910e42dca25a863c4925d77c; // string
$target_languages = fr,de; // string | The language(s) being ordered (Any RFC 5646 language code) separated by comma (,)
$approve_uplevel = true; // string

try {
    $result = $apiInstance->performTranslation($v, $job_id, $target_languages, $approve_uplevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->performTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **job_id** | **string**|  |
 **target_languages** | **string**| The language(s) being ordered (Any RFC 5646 language code) separated by comma (,) |
 **approve_uplevel** | **string**|  | [optional]

### Return type

[**\Cielo24\Model\PerformTranslationResponse**](../Model/PerformTranslationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
