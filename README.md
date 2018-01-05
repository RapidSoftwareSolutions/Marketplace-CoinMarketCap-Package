[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/CoinMarketCap/functions?utm_source=RapidAPIGitHub_CoinMarketCap&utm_medium=button&utm_content=RapidAPI_GitHub)

# CoinMarketCap Package
Cryptocurrency market cap rankings, charts, and more!
* Domain: [coinmarketcap.com](https://coinmarketcap.com)
* Credentials: free

 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
## CoinMarketCap.getCryptocurrenciesList
Get cryptocurrencies list.

| Field  | Type  | Description
|--------|-------|----------
| start  | Number| return results from rank `start` and above.
| limit  | Number| return a maximum of `limit` results (default is 100, use 0 to return all results)
| convert| Select| Return price, 24h volume, and market cap in terms of another currency.

## CoinMarketCap.getCryptocurrency
Get Specific Currency.

| Field  | Type  | Description
|--------|-------|----------
| id     | String | Id of the currency.
| convert| Select| Return price, 24h volume, and market cap in terms of another currency.

## CoinMarketCap.getGlobalData
Get Global Data.

| Field  | Type  | Description
|--------|-------|----------
| convert| Select| Return price, 24h volume, and market cap in terms of another currency.

