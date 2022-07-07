# # JobOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_approval_steps** | **string[]** | Requires your approval of a job at specified points in the workflow. When the job is ready for approval you will be emailed a link that will take you to a web based tool you can use to view, edit and approve the job. You may request approval at two points in the workflow: before translation and before the job is returned. | [optional]
**customer_approval_tool** | **string** | Determines which web based tool to use for viewing, editing and approving jobs. | [optional] [default to 'CIELO24']
**custom_metadata** | **object** | A JSON dictionary of key value pairs. These will be used as substitution strings when building the callback URL and custom DFXP caption header. | [optional]
**notes** | **mixed** | Allows you to provide text that will be displayed to the transcriber when the job is processed. An HTML included will be escaped. | [optional]
**return_iwp** | [**\Cielo24\Model\IWPEnum[]**](IWPEnum.md) | Allows you to receive additional callbacks when interim versions of the job are completed. If you specified a callback_url, then a callback will sent for FINAL regardless of the value of this option. | [optional]
**generate_media_intelligence_iwp** | [**\Cielo24\Model\IWPEnum[]**](IWPEnum.md) | Requests that media intelligence be generated for the specified interim/final versions of the transcript. Media intelligence data is added to the ElementList and can be retrieve using the get_elementlist API call. See [ElementList](https://cielo24.readthedocs.io/en/latest/output_formats/elementlist.html#media-intelligence-label) for details. | [optional]
**speaker_id** | **string** | Requests that speaker names be identified. | [optional] [default to 'false']
**audio_description** | **string** | Requests that all noises and sounds be identified. | [optional] [default to 'false']
**on_screen_text** | **string** | Requests that any text that appears in the media be added to the transcription. | [optional] [default to 'false']
**music_lyrics** | **string** | Requests that lyrics to songs be transcribed instead of labeled [MUSIC]. | [optional] [default to 'false']
**custom_special_handling** | **string** | Requests that transcribers follow submitted instruction set. | [optional] [default to 'false']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
