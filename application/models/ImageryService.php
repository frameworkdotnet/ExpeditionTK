<?php
class char {
}

class duration {
}

class guid {
}

class RequestBase {
  public $Credentials; // Credentials
  public $Culture; // string
  public $ExecutionOptions; // ExecutionOptions
  public $UserProfile; // UserProfile
}

class Credentials {
  public $ApplicationId; // string
  public $Token; // string
}

class ExecutionOptions {
  public $SuppressFaults; // boolean
}

class UserProfile {
  public $CurrentHeading; // Heading
  public $CurrentLocation; // UserLocation
  public $DeviceType; // DeviceType
  public $DistanceUnit; // DistanceUnit
  public $IPAddress; // string
  public $MapView; // ShapeBase
  public $ScreenSize; // SizeOfint
}

class Heading {
  public $Orientation; // double
}

class UserLocation {
  public $Confidence; // Confidence
}

class Location {
  public $Altitude; // double
  public $Latitude; // double
  public $Longitude; // double
}

class GeocodeLocation {
  public $CalculationMethod; // string
}

class Confidence {
}

class DeviceType {
}

class DistanceUnit {
}

class ShapeBase {
}

class Circle {
  public $Center; // Location
  public $DistanceUnit; // DistanceUnit
  public $Radius; // double
}

class Rectangle {
  public $Northeast; // Location
  public $Southwest; // Location
}

class Polygon {
  public $Vertices; // ArrayOfLocation
}

class SizeOfint {
  public $Height; // int
  public $Width; // int
}

class UriScheme {
}

class MapStyle {
}

class ResponseBase {
  public $BrandLogoUri; // anyURI
  public $ResponseSummary; // ResponseSummary
}

class ResponseSummary {
  public $AuthenticationResultCode; // AuthenticationResultCode
  public $Copyright; // string
  public $FaultReason; // string
  public $StatusCode; // ResponseStatusCode
  public $TraceId; // string
}

class AuthenticationResultCode {
}

class ResponseStatusCode {
}

class RangeOfint {
  public $From; // int
  public $To; // int
}

class RangeOfdateTime {
  public $From; // dateTime
  public $To; // dateTime
}

class ImageType {
}

class Pushpin {
  public $IconStyle; // string
  public $Label; // string
  public $Location; // Location
}

class ImageryMetadataRequest {
  public $Options; // ImageryMetadataOptions
  public $Style; // MapStyle
}

class ImageryMetadataOptions {
  public $Heading; // Heading
  public $Location; // Location
  public $ReturnImageryProviders; // boolean
  public $UriScheme; // UriScheme
  public $ZoomLevel; // int
}

class ImageryMetadataResponse {
  public $Results; // ArrayOfImageryMetadataResult
}

class ImageryMetadataResult {
  public $ImageSize; // SizeOfint
  public $ImageUri; // string
  public $ImageUriSubdomains; // ArrayOfstring
  public $ImageryProviders; // ArrayOfImageryProvider
  public $Vintage; // RangeOfdateTime
  public $ZoomRange; // RangeOfint
}

class ImageryProvider {
  public $Attribution; // string
  public $CoverageAreas; // ArrayOfCoverageArea
}

class CoverageArea {
  public $BoundingRectangle; // Rectangle
  public $ZoomRange; // RangeOfint
}

class ImageryMetadataBirdseyeResult {
  public $Heading; // Heading
  public $TilesX; // int
  public $TilesY; // int
}

class MapUriRequest {
  public $Center; // Location
  public $MajorRoutesDestination; // Location
  public $Options; // MapUriOptions
  public $Pushpins; // ArrayOfPushpin
}

class MapUriOptions {
  public $DisplayLayers; // ArrayOfstring
  public $ImageSize; // SizeOfint
  public $ImageType; // ImageType
  public $PreventIconCollision; // boolean
  public $Style; // MapStyle
  public $UriScheme; // UriScheme
  public $ZoomLevel; // int
}

class MapUriResponse {
  public $Uri; // string
}

class GetImageryMetadata {
  public $request; // ImageryMetadataRequest
}

class GetImageryMetadataResponse {
  public $GetImageryMetadataResult; // ImageryMetadataResponse
}

class GetMapUri {
  public $request; // MapUriRequest
}

class GetMapUriResponse {
  public $GetMapUriResult; // MapUriResponse
}

class SearchPoint {
  public $Point; // Location
}


/**
 * ImageryService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ImageryService extends SoapClient {

  private static $classmap = array(
                                    'char' => 'char',
                                    'duration' => 'duration',
                                    'guid' => 'guid',
                                    'RequestBase' => 'RequestBase',
                                    'Credentials' => 'Credentials',
                                    'ExecutionOptions' => 'ExecutionOptions',
                                    'UserProfile' => 'UserProfile',
                                    'Heading' => 'Heading',
                                    'UserLocation' => 'UserLocation',
                                    'Location' => 'Location',
                                    'GeocodeLocation' => 'GeocodeLocation',
                                    'Confidence' => 'Confidence',
                                    'DeviceType' => 'DeviceType',
                                    'DistanceUnit' => 'DistanceUnit',
                                    'ShapeBase' => 'ShapeBase',
                                    'Circle' => 'Circle',
                                    'Rectangle' => 'Rectangle',
                                    'Polygon' => 'Polygon',
                                    'SizeOfint' => 'SizeOfint',
                                    'UriScheme' => 'UriScheme',
                                    'MapStyle' => 'MapStyle',
                                    'ResponseBase' => 'ResponseBase',
                                    'ResponseSummary' => 'ResponseSummary',
                                    'AuthenticationResultCode' => 'AuthenticationResultCode',
                                    'ResponseStatusCode' => 'ResponseStatusCode',
                                    'RangeOfint' => 'RangeOfint',
                                    'RangeOfdateTime' => 'RangeOfdateTime',
                                    'ImageType' => 'ImageType',
                                    'Pushpin' => 'Pushpin',
                                    'ImageryMetadataRequest' => 'ImageryMetadataRequest',
                                    'ImageryMetadataOptions' => 'ImageryMetadataOptions',
                                    'ImageryMetadataResponse' => 'ImageryMetadataResponse',
                                    'ImageryMetadataResult' => 'ImageryMetadataResult',
                                    'ImageryProvider' => 'ImageryProvider',
                                    'CoverageArea' => 'CoverageArea',
                                    'ImageryMetadataBirdseyeResult' => 'ImageryMetadataBirdseyeResult',
                                    'MapUriRequest' => 'MapUriRequest',
                                    'MapUriOptions' => 'MapUriOptions',
                                    'MapUriResponse' => 'MapUriResponse',
                                    'GetImageryMetadata' => 'GetImageryMetadata',
                                    'GetImageryMetadataResponse' => 'GetImageryMetadataResponse',
                                    'GetMapUri' => 'GetMapUri',
                                    'GetMapUriResponse' => 'GetMapUriResponse',
                                    'SearchPoint' => 'SearchPoint',
                                   );

  public function ImageryService($wsdl = "http://dev.virtualearth.net/webservices/v1/metadata/imageryservice/imageryservice.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param GetImageryMetadata $parameters
   * @return GetImageryMetadataResponse
   */
  public function GetImageryMetadata(GetImageryMetadata $parameters) {
    return $this->__soapCall('GetImageryMetadata', array($parameters),       array(
            'uri' => 'http://dev.virtualearth.net/webservices/v1/imagery',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param GetMapUri $parameters
   * @return GetMapUriResponse
   */
  public function GetMapUri(GetMapUri $parameters) {
    return $this->__soapCall('GetMapUri', array($parameters),       array(
            'uri' => 'http://dev.virtualearth.net/webservices/v1/imagery',
            'soapaction' => ''
           )
      );
  }

}

?>
