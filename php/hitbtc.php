<?php

namespace ccxt;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

use Exception as Exception; // a common import

class hitbtc extends Exchange {

    public function describe () {
        return array_replace_recursive (parent::describe (), array (
            'id' => 'hitbtc',
            'name' => 'HitBTC',
            'countries' => 'HK',
            'rateLimit' => 1500,
            'version' => '1',
            'has' => array (
                'CORS' => false,
                'fetchTrades' => true,
                'fetchTickers' => true,
                'fetchOrder' => true,
                'fetchOpenOrders' => true,
                'fetchClosedOrders' => true,
                'withdraw' => true,
            ),
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766555-8eaec20e-5edc-11e7-9c5b-6dc69fc42f5e.jpg',
                'api' => 'http://api.hitbtc.com',
                'www' => 'https://hitbtc.com',
                'doc' => 'https://github.com/hitbtc-com/hitbtc-api/blob/master/APIv1.md',
                'fees' => array (
                    'https://hitbtc.com/fees-and-limits',
                    'https://support.hitbtc.com/hc/en-us/articles/115005148605-Fees-and-limits',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{symbol}/orderbook',
                        '{symbol}/ticker',
                        '{symbol}/trades',
                        '{symbol}/trades/recent',
                        'symbols',
                        'ticker',
                        'time',
                    ),
                ),
                'trading' => array (
                    'get' => array (
                        'balance',
                        'orders/active',
                        'orders/recent',
                        'order',
                        'trades/by/order',
                        'trades',
                    ),
                    'post' => array (
                        'new_order',
                        'cancel_order',
                        'cancel_orders',
                    ),
                ),
                'payment' => array (
                    'get' => array (
                        'balance',
                        'address/{currency}',
                        'transactions',
                        'transactions/{transaction}',
                    ),
                    'post' => array (
                        'transfer_to_trading',
                        'transfer_to_main',
                        'address/{currency}',
                        'payout',
                    ),
                ),
            ),
            // hardcoded fees are deprecated and should only be used when there's no other way to get fee info
            'fees' => array (
                'trading' => array (
                    'tierBased' => false,
                    'percentage' => true,
                    'maker' => -0.01 / 100,
                    'taker' => 0.1 / 100,
                ),
                'funding' => array (
                    'tierBased' => false,
                    'percentage' => false,
                    'withdraw' => array (
                        'BTC' => 0.001,
                        'BCC' => 0.0018,
                        'ETH' => 0.00215,
                        'BCH' => 0.0018,
                        'USDT' => 100,
                        'DASH' => 0.03,
                        'BTG' => 0.0005,
                        'LTC' => 0.003,
                        'ZEC' => 0.0001,
                        'XMR' => 0.09,
                        '1ST' => 0.84,
                        'ADX' => 5.7,
                        'AE' => 6.7,
                        'AEON' => 0.01006,
                        'AIR' => 565,
                        'AMP' => 9,
                        'ANT' => 6.7,
                        'ARDR' => 1,
                        'ARN' => 18.5,
                        'ART' => 26,
                        'ATB' => 0.0004,
                        'ATL' => 27,
                        'ATM' => 504,
                        'ATS' => 860,
                        'AVT' => 1.9,
                        'BAS' => 113,
                        'BCN' => 0.1,
                        'DAO Casino' => 124, // id = 'BET'
                        'BKB' => 46,
                        'BMC' => 32,
                        'BMT' => 100,
                        'BNT' => 2.57,
                        'BQX' => 4.7,
                        'BTM' => 40,
                        'BTX' => 0.04,
                        'BUS' => 0.004,
                        'CCT' => 115,
                        'CDT' => 100,
                        'CDX' => 30,
                        'CFI' => 61,
                        'CLD' => 0.88,
                        'CND' => 574,
                        'CNX' => 0.04,
                        'COSS' => 65,
                        'CSNO' => 16,
                        'CTR' => 15,
                        'CTX' => 146,
                        'CVC' => 8.46,
                        'DBIX' => 0.0168,
                        'DCN' => 120000,
                        'DCT' => 0.02,
                        'DDF' => 342,
                        'DENT' => 6240,
                        'DGB' => 0.4,
                        'DGD' => 0.01,
                        'DICE' => 0.32,
                        'DLT' => 0.26,
                        'DNT' => 0.21,
                        'DOGE' => 2,
                        'DOV' => 34,
                        'DRPU' => 24,
                        'DRT' => 240,
                        'DSH' => 0.017,
                        'EBET' => 84,
                        'EBTC' => 20,
                        'EBTCOLD' => 6.6,
                        'ECAT' => 14,
                        'EDG' => 2,
                        'EDO' => 2.9,
                        'ELE' => 0.00172,
                        'ELM' => 0.004,
                        'EMC' => 0.03,
                        'EMGO' => 14,
                        'ENJ' => 163,
                        'EOS' => 1.5,
                        'ERO' => 34,
                        'ETBS' => 15,
                        'ETC' => 0.002,
                        'ETP' => 0.004,
                        'EVX' => 5.4,
                        'EXN' => 456,
                        'FRD' => 65,
                        'FUEL' => 123.00105,
                        'FUN' => 202.9598309,
                        'FYN' => 1.849,
                        'FYP' => 66.13,
                        'GNO' => 0.0034,
                        'GUP' => 4,
                        'GVT' => 1.2,
                        'HAC' => 144,
                        'HDG' => 7,
                        'HGT' => 1082,
                        'HPC' => 0.4,
                        'HVN' => 120,
                        'ICN' => 0.55,
                        'ICO' => 34,
                        'ICOS' => 0.35,
                        'IND' => 76,
                        'INDI' => 5913,
                        'ITS' => 15.0012,
                        'IXT' => 11,
                        'KBR' => 143,
                        'KICK' => 112,
                        'LA' => 41,
                        'LAT' => 1.44,
                        'LIFE' => 13000,
                        'LRC' => 27,
                        'LSK' => 0.3,
                        'LUN' => 0.34,
                        'MAID' => 5,
                        'MANA' => 143,
                        'MCAP' => 5.44,
                        'MIPS' => 43,
                        'MNE' => 1.33,
                        'MSP' => 121,
                        'MTH' => 92,
                        'MYB' => 3.9,
                        'NDC' => 165,
                        'NEBL' => 0.04,
                        'NET' => 3.96,
                        'NTO' => 998,
                        'NXC' => 13.39,
                        'NXT' => 3,
                        'OAX' => 15,
                        'ODN' => 0.004,
                        'OMG' => 2,
                        'OPT' => 335,
                        'ORME' => 2.8,
                        'OTN' => 0.57,
                        'PAY' => 3.1,
                        'PIX' => 96,
                        'PLBT' => 0.33,
                        'PLR' => 114,
                        'PLU' => 0.87,
                        'POE' => 784,
                        'POLL' => 3.5,
                        'PPT' => 2,
                        'PRE' => 32,
                        'PRG' => 39,
                        'PRO' => 41,
                        'PRS' => 60,
                        'PTOY' => 0.5,
                        'QAU' => 63,
                        'QCN' => 0.03,
                        'QTUM' => 0.04,
                        'QVT' => 64,
                        'REP' => 0.02,
                        'RKC' => 15,
                        'RVT' => 14,
                        'SAN' => 2.24,
                        'SBD' => 0.03,
                        'SCL' => 2.6,
                        'SISA' => 1640,
                        'SKIN' => 407,
                        'SMART' => 0.4,
                        'SMS' => 0.0375,
                        'SNC' => 36,
                        'SNGLS' => 4,
                        'SNM' => 48,
                        'SNT' => 233,
                        'STEEM' => 0.01,
                        'STRAT' => 0.01,
                        'STU' => 14,
                        'STX' => 11,
                        'SUB' => 17,
                        'SUR' => 3,
                        'SWT' => 0.51,
                        'TAAS' => 0.91,
                        'TBT' => 2.37,
                        'TFL' => 15,
                        'TIME' => 0.03,
                        'TIX' => 7.1,
                        'TKN' => 1,
                        'TKR' => 84,
                        'TNT' => 90,
                        'TRST' => 1.6,
                        'TRX' => 1395,
                        'UET' => 480,
                        'UGT' => 15,
                        'VEN' => 14,
                        'VERI' => 0.037,
                        'VIB' => 50,
                        'VIBE' => 145,
                        'VOISE' => 618,
                        'WEALTH' => 0.0168,
                        'WINGS' => 2.4,
                        'WTC' => 0.75,
                        'XAUR' => 3.23,
                        'XDN' => 0.01,
                        'XEM' => 15,
                        'XUC' => 0.9,
                        'YOYOW' => 140,
                        'ZAP' => 24,
                        'ZRX' => 23,
                        'ZSC' => 191,
                    ),
                    'deposit' => array (
                        'BTC' => 0.0006,
                        'ETH' => 0.003,
                        'BCH' => 0,
                        'USDT' => 0,
                        'BTG' => 0,
                        'LTC' => 0,
                        'ZEC' => 0,
                        'XMR' => 0,
                        '1ST' => 0,
                        'ADX' => 0,
                        'AE' => 0,
                        'AEON' => 0,
                        'AIR' => 0,
                        'AMP' => 0,
                        'ANT' => 0,
                        'ARDR' => 0,
                        'ARN' => 0,
                        'ART' => 0,
                        'ATB' => 0,
                        'ATL' => 0,
                        'ATM' => 0,
                        'ATS' => 0,
                        'AVT' => 0,
                        'BAS' => 0,
                        'BCN' => 0,
                        'DAO Casino' => 0, // id = 'BET'
                        'BKB' => 0,
                        'BMC' => 0,
                        'BMT' => 0,
                        'BNT' => 0,
                        'BQX' => 0,
                        'BTM' => 0,
                        'BTX' => 0,
                        'BUS' => 0,
                        'CCT' => 0,
                        'CDT' => 0,
                        'CDX' => 0,
                        'CFI' => 0,
                        'CLD' => 0,
                        'CND' => 0,
                        'CNX' => 0,
                        'COSS' => 0,
                        'CSNO' => 0,
                        'CTR' => 0,
                        'CTX' => 0,
                        'CVC' => 0,
                        'DBIX' => 0,
                        'DCN' => 0,
                        'DCT' => 0,
                        'DDF' => 0,
                        'DENT' => 0,
                        'DGB' => 0,
                        'DGD' => 0,
                        'DICE' => 0,
                        'DLT' => 0,
                        'DNT' => 0,
                        'DOGE' => 0,
                        'DOV' => 0,
                        'DRPU' => 0,
                        'DRT' => 0,
                        'DSH' => 0,
                        'EBET' => 0,
                        'EBTC' => 0,
                        'EBTCOLD' => 0,
                        'ECAT' => 0,
                        'EDG' => 0,
                        'EDO' => 0,
                        'ELE' => 0,
                        'ELM' => 0,
                        'EMC' => 0,
                        'EMGO' => 0,
                        'ENJ' => 0,
                        'EOS' => 0,
                        'ERO' => 0,
                        'ETBS' => 0,
                        'ETC' => 0,
                        'ETP' => 0,
                        'EVX' => 0,
                        'EXN' => 0,
                        'FRD' => 0,
                        'FUEL' => 0,
                        'FUN' => 0,
                        'FYN' => 0,
                        'FYP' => 0,
                        'GNO' => 0,
                        'GUP' => 0,
                        'GVT' => 0,
                        'HAC' => 0,
                        'HDG' => 0,
                        'HGT' => 0,
                        'HPC' => 0,
                        'HVN' => 0,
                        'ICN' => 0,
                        'ICO' => 0,
                        'ICOS' => 0,
                        'IND' => 0,
                        'INDI' => 0,
                        'ITS' => 0,
                        'IXT' => 0,
                        'KBR' => 0,
                        'KICK' => 0,
                        'LA' => 0,
                        'LAT' => 0,
                        'LIFE' => 0,
                        'LRC' => 0,
                        'LSK' => 0,
                        'LUN' => 0,
                        'MAID' => 0,
                        'MANA' => 0,
                        'MCAP' => 0,
                        'MIPS' => 0,
                        'MNE' => 0,
                        'MSP' => 0,
                        'MTH' => 0,
                        'MYB' => 0,
                        'NDC' => 0,
                        'NEBL' => 0,
                        'NET' => 0,
                        'NTO' => 0,
                        'NXC' => 0,
                        'NXT' => 0,
                        'OAX' => 0,
                        'ODN' => 0,
                        'OMG' => 0,
                        'OPT' => 0,
                        'ORME' => 0,
                        'OTN' => 0,
                        'PAY' => 0,
                        'PIX' => 0,
                        'PLBT' => 0,
                        'PLR' => 0,
                        'PLU' => 0,
                        'POE' => 0,
                        'POLL' => 0,
                        'PPT' => 0,
                        'PRE' => 0,
                        'PRG' => 0,
                        'PRO' => 0,
                        'PRS' => 0,
                        'PTOY' => 0,
                        'QAU' => 0,
                        'QCN' => 0,
                        'QTUM' => 0,
                        'QVT' => 0,
                        'REP' => 0,
                        'RKC' => 0,
                        'RVT' => 0,
                        'SAN' => 0,
                        'SBD' => 0,
                        'SCL' => 0,
                        'SISA' => 0,
                        'SKIN' => 0,
                        'SMART' => 0,
                        'SMS' => 0,
                        'SNC' => 0,
                        'SNGLS' => 0,
                        'SNM' => 0,
                        'SNT' => 0,
                        'STEEM' => 0,
                        'STRAT' => 0,
                        'STU' => 0,
                        'STX' => 0,
                        'SUB' => 0,
                        'SUR' => 0,
                        'SWT' => 0,
                        'TAAS' => 0,
                        'TBT' => 0,
                        'TFL' => 0,
                        'TIME' => 0,
                        'TIX' => 0,
                        'TKN' => 0,
                        'TKR' => 0,
                        'TNT' => 0,
                        'TRST' => 0,
                        'TRX' => 0,
                        'UET' => 0,
                        'UGT' => 0,
                        'VEN' => 0,
                        'VERI' => 0,
                        'VIB' => 0,
                        'VIBE' => 0,
                        'VOISE' => 0,
                        'WEALTH' => 0,
                        'WINGS' => 0,
                        'WTC' => 0,
                        'XAUR' => 0,
                        'XDN' => 0,
                        'XEM' => 0,
                        'XUC' => 0,
                        'YOYOW' => 0,
                        'ZAP' => 0,
                        'ZRX' => 0,
                        'ZSC' => 0,
                    ),
                ),
            ),
            'commonCurrencies' => array (
                'BCC' => 'BCC',
                'BET' => 'DAO Casino',
                'CAT' => 'BitClave',
                'DRK' => 'DASH',
                'EMGO' => 'MGO',
                'GET' => 'Themis',
                'USD' => 'USDT',
                'XBT' => 'BTC',
            ),
            'options' => array (
                'defaultTimeInForce' => 'FOK',
            ),
        ));
    }

    public function fetch_markets () {
        $markets = $this->publicGetSymbols ();
        $result = array ();
        for ($p = 0; $p < count ($markets['symbols']); $p++) {
            $market = $markets['symbols'][$p];
            $id = $market['symbol'];
            $baseId = $market['commodity'];
            $quoteId = $market['currency'];
            $lot = $this->safe_float($market, 'lot');
            $step = $this->safe_float($market, 'step');
            $base = $this->common_currency_code($baseId);
            $quote = $this->common_currency_code($quoteId);
            $symbol = $base . '/' . $quote;
            $result[] = array (
                'info' => $market,
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'baseId' => $baseId,
                'quoteId' => $quoteId,
                'lot' => $lot,
                'step' => $step,
                'active' => true,
                'maker' => $this->safe_float($market, 'provideLiquidityRate'),
                'taker' => $this->safe_float($market, 'takeLiquidityRate'),
                'precision' => array (
                    'amount' => $this->precision_from_string($market['lot']),
                    'price' => $this->precision_from_string($market['step']),
                ),
                'limits' => array (
                    'amount' => array (
                        'min' => $lot,
                        'max' => null,
                    ),
                    'price' => array (
                        'min' => $step,
                        'max' => null,
                    ),
                    'cost' => array (
                        'min' => null,
                        'max' => null,
                    ),
                ),
            );
        }
        return $result;
    }

    public function fetch_balance ($params = array ()) {
        $this->load_markets();
        $method = $this->safe_string($params, 'type', 'trading');
        $method .= 'GetBalance';
        $query = $this->omit ($params, 'type');
        $response = $this->$method ($query);
        $balances = $response['balance'];
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = $balances[$b];
            $code = $balance['currency_code'];
            $currency = $this->common_currency_code($code);
            $free = $this->safe_float($balance, 'cash', 0.0);
            $free = $this->safe_float($balance, 'balance', $free);
            $used = $this->safe_float($balance, 'reserved', 0.0);
            $account = array (
                'free' => $free,
                'used' => $used,
                'total' => $this->sum ($free, $used),
            );
            $result[$currency] = $account;
        }
        return $this->parse_balance($result);
    }

    public function fetch_order_book ($symbol, $limit = null, $params = array ()) {
        $this->load_markets();
        $orderbook = $this->publicGetSymbolOrderbook (array_merge (array (
            'symbol' => $this->market_id($symbol),
        ), $params));
        return $this->parse_order_book($orderbook);
    }

    public function parse_ticker ($ticker, $market = null) {
        $timestamp = $ticker['timestamp'];
        $symbol = null;
        if ($market)
            $symbol = $market['symbol'];
        $last = $this->safe_float($ticker, 'last');
        return array (
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => $this->safe_float($ticker, 'high'),
            'low' => $this->safe_float($ticker, 'low'),
            'bid' => $this->safe_float($ticker, 'bid'),
            'bidVolume' => null,
            'ask' => $this->safe_float($ticker, 'ask'),
            'askVolume' => null,
            'vwap' => null,
            'open' => $this->safe_float($ticker, 'open'),
            'close' => $last,
            'last' => $last,
            'previousClose' => null,
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => $this->safe_float($ticker, 'volume'),
            'quoteVolume' => $this->safe_float($ticker, 'volume_quote'),
            'info' => $ticker,
        );
    }

    public function fetch_tickers ($symbols = null, $params = array ()) {
        $this->load_markets();
        $tickers = $this->publicGetTicker ($params);
        $ids = is_array ($tickers) ? array_keys ($tickers) : array ();
        $result = array ();
        for ($i = 0; $i < count ($ids); $i++) {
            $id = $ids[$i];
            $market = $this->markets_by_id[$id];
            $symbol = $market['symbol'];
            $ticker = $tickers[$id];
            $result[$symbol] = $this->parse_ticker($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($symbol, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        $ticker = $this->publicGetSymbolTicker (array_merge (array (
            'symbol' => $market['id'],
        ), $params));
        if (is_array ($ticker) && array_key_exists ('message', $ticker))
            throw new ExchangeError ($this->id . ' ' . $ticker['message']);
        return $this->parse_ticker($ticker, $market);
    }

    public function parse_trade ($trade, $market = null) {
        if (gettype ($trade) === 'array' && count (array_filter (array_keys ($trade), 'is_string')) == 0)
            return $this->parse_public_trade ($trade, $market);
        return $this->parse_order_trade ($trade, $market);
    }

    public function parse_public_trade ($trade, $market = null) {
        $symbol = null;
        if ($market)
            $symbol = $market['symbol'];
        return array (
            'info' => $trade,
            'id' => (string) $trade[0],
            'timestamp' => $trade[3],
            'datetime' => $this->iso8601 ($trade[3]),
            'symbol' => $symbol,
            'type' => null,
            'side' => $trade[4],
            'price' => floatval ($trade[1]),
            'amount' => floatval ($trade[2]),
        );
    }

    public function parse_order_trade ($trade, $market = null) {
        $symbol = null;
        if ($market)
            $symbol = $market['symbol'];
        $amount = $this->safe_float($trade, 'execQuantity');
        if ($market)
            $amount *= $market['lot'];
        $price = $this->safe_float($trade, 'execPrice');
        $cost = $price * $amount;
        $fee = array (
            'cost' => $this->safe_float($trade, 'fee'),
            'currency' => null,
            'rate' => null,
        );
        $timestamp = $trade['timestamp'];
        return array (
            'info' => $trade,
            'id' => $trade['tradeId'],
            'order' => $trade['clientOrderId'],
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'symbol' => $symbol,
            'type' => null,
            'side' => $trade['side'],
            'price' => $price,
            'amount' => $amount,
            'cost' => $cost,
            'fee' => $fee,
        );
    }

    public function fetch_trades ($symbol, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        $response = $this->publicGetSymbolTrades (array_merge (array (
            'symbol' => $market['id'],
            // 'from' => 0,
            // 'till' => 100,
            // 'by' => 'ts', // or by trade_id
            // 'sort' => 'desc', // or asc
            // 'start_index' => 0,
            // 'max_results' => 1000,
            // 'format_item' => 'object',
            // 'format_price' => 'number',
            // 'format_amount' => 'number',
            // 'format_tid' => 'string',
            // 'format_timestamp' => 'millisecond',
            // 'format_wrap' => false,
            'side' => 'true',
        ), $params));
        return $this->parse_trades($response['trades'], $market, $since, $limit);
    }

    public function create_order ($symbol, $type, $side, $amount, $price = null, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        // check if $amount can be evenly divided into lots
        // they want integer $quantity in lot units
        $quantity = floatval ($amount) / $market['lot'];
        $wholeLots = (int) round ($quantity);
        $difference = $quantity - $wholeLots;
        if (abs ($difference) > $market['step'])
            throw new ExchangeError ($this->id . ' $order $amount should be evenly divisible by lot unit size of ' . (string) $market['lot']);
        $clientOrderId = $this->milliseconds ();
        $order = array (
            'clientOrderId' => (string) $clientOrderId,
            'symbol' => $market['id'],
            'side' => $side,
            'quantity' => (string) $wholeLots, // $quantity in integer lot units
            'type' => $type,
        );
        if ($type === 'limit') {
            $order['price'] = $this->price_to_precision($symbol, $price);
        } else {
            $order['timeInForce'] = $this->options['defaultTimeInForce'];
        }
        $response = $this->tradingPostNewOrder (array_merge ($order, $params));
        return $this->parse_order($response['ExecutionReport'], $market);
    }

    public function cancel_order ($id, $symbol = null, $params = array ()) {
        $this->load_markets();
        return $this->tradingPostCancelOrder (array_merge (array (
            'clientOrderId' => $id,
        ), $params));
    }

    public function parse_order_status ($status) {
        $statuses = array (
            'new' => 'open',
            'partiallyFilled' => 'open',
            'filled' => 'closed',
            'canceled' => 'canceled',
            'rejected' => 'rejected',
            'expired' => 'expired',
        );
        return $this->safe_string($statuses, $status);
    }

    public function parse_order ($order, $market = null) {
        $timestamp = $this->safe_integer($order, 'lastTimestamp');
        if ($timestamp === null)
            $timestamp = $this->safe_integer($order, 'timestamp');
        $symbol = null;
        if (!$market)
            $market = $this->markets_by_id[$order['symbol']];
        $status = $this->safe_string($order, 'orderStatus');
        if ($status)
            $status = $this->parse_order_status($status);
        $averagePrice = $this->safe_float($order, 'avgPrice', 0.0);
        $price = $this->safe_float($order, 'orderPrice');
        if ($price === null)
            $price = $this->safe_float($order, 'price');
        $amount = $this->safe_float($order, 'orderQuantity');
        if ($amount === null)
            $amount = $this->safe_float($order, 'quantity');
        $remaining = $this->safe_float($order, 'quantityLeaves');
        if ($remaining === null)
            $remaining = $this->safe_float($order, 'leavesQuantity');
        $filled = null;
        $cost = null;
        $amountDefined = ($amount !== null);
        $remainingDefined = ($remaining !== null);
        if ($market !== null) {
            $symbol = $market['symbol'];
            if ($amountDefined)
                $amount *= $market['lot'];
            if ($remainingDefined)
                $remaining *= $market['lot'];
        } else {
            $marketId = $this->safe_string($order, 'symbol');
            if (is_array ($this->markets_by_id) && array_key_exists ($marketId, $this->markets_by_id))
                $market = $this->markets_by_id[$marketId];
        }
        if ($amountDefined) {
            if ($remainingDefined) {
                $filled = $amount - $remaining;
                $cost = $averagePrice * $filled;
            }
        }
        $feeCost = $this->safe_float($order, 'fee');
        $feeCurrency = null;
        if ($market !== null) {
            $symbol = $market['symbol'];
            $feeCurrency = $market['quote'];
        }
        $fee = array (
            'cost' => $feeCost,
            'currency' => $feeCurrency,
            'rate' => null,
        );
        return array (
            'id' => (string) $order['clientOrderId'],
            'info' => $order,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'lastTradeTimestamp' => null,
            'status' => $status,
            'symbol' => $symbol,
            'type' => $order['type'],
            'side' => $order['side'],
            'price' => $price,
            'cost' => $cost,
            'amount' => $amount,
            'filled' => $filled,
            'remaining' => $remaining,
            'fee' => $fee,
        );
    }

    public function fetch_order ($id, $symbol = null, $params = array ()) {
        $this->load_markets();
        $response = $this->tradingGetOrder (array_merge (array (
            'clientOrderId' => $id,
        ), $params));
        if ($response['orders'][0]) {
            return $this->parse_order($response['orders'][0]);
        }
        throw new OrderNotFound ($this->id . ' fetchOrder() error => ' . $this->response);
    }

    public function fetch_open_orders ($symbol = null, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $statuses = array ( 'new', 'partiallyFiiled' );
        $market = null;
        $request = array (
            'sort' => 'desc',
            'statuses' => implode (',', $statuses),
        );
        if ($symbol) {
            $market = $this->market ($symbol);
            $request['symbols'] = $market['id'];
        }
        $response = $this->tradingGetOrdersActive (array_merge ($request, $params));
        return $this->parse_orders($response['orders'], $market, $since, $limit);
    }

    public function fetch_closed_orders ($symbol = null, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = null;
        $statuses = array ( 'filled', 'canceled', 'rejected', 'expired' );
        $request = array (
            'sort' => 'desc',
            'statuses' => implode (',', $statuses),
            'max_results' => 1000,
        );
        if ($symbol) {
            $market = $this->market ($symbol);
            $request['symbols'] = $market['id'];
        }
        $response = $this->tradingGetOrdersRecent (array_merge ($request, $params));
        return $this->parse_orders($response['orders'], $market, $since, $limit);
    }

    public function fetch_order_trades ($id, $symbol = null, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = null;
        if ($symbol !== null)
            $market = $this->market ($symbol);
        $response = $this->tradingGetTradesByOrder (array_merge (array (
            'clientOrderId' => $id,
        ), $params));
        return $this->parse_trades($response['trades'], $market, $since, $limit);
    }

    public function withdraw ($code, $amount, $address, $tag = null, $params = array ()) {
        $this->check_address($address);
        $this->load_markets();
        $currency = $this->currency ($code);
        $request = array (
            'currency_code' => $currency['id'],
            'amount' => $amount,
            'address' => $address,
        );
        if ($tag)
            $request['paymentId'] = $tag;
        $response = $this->paymentPostPayout (array_merge ($request, $params));
        return array (
            'info' => $response,
            'id' => $response['transaction'],
        );
    }

    public function nonce () {
        return $this->milliseconds ();
    }

    public function sign ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = '/' . 'api' . '/' . $this->version . '/' . $api . '/' . $this->implode_params($path, $params);
        $query = $this->omit ($params, $this->extract_params($path));
        if ($api === 'public') {
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $this->check_required_credentials();
            $nonce = $this->nonce ();
            $payload = array ( 'nonce' => $nonce, 'apikey' => $this->apiKey );
            $query = array_merge ($payload, $query);
            if ($method === 'GET')
                $url .= '?' . $this->urlencode ($query);
            else
                $url .= '?' . $this->urlencode ($payload);
            $auth = $url;
            if ($method === 'POST') {
                if ($query) {
                    $body = $this->urlencode ($query);
                    $auth .= $body;
                }
            }
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'X-Signature' => strtolower ($this->hmac ($this->encode ($auth), $this->encode ($this->secret), 'sha512')),
            );
        }
        $url = $this->urls['api'] . $url;
        return array ( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $response = $this->fetch2 ($path, $api, $method, $params, $headers, $body);
        if (is_array ($response) && array_key_exists ('code', $response)) {
            if (is_array ($response) && array_key_exists ('ExecutionReport', $response)) {
                if ($response['ExecutionReport']['orderRejectReason'] === 'orderExceedsLimit')
                    throw new InsufficientFunds ($this->id . ' ' . $this->json ($response));
            }
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        }
        return $response;
    }
}
