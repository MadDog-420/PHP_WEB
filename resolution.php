<?php require_once "ejercicio.php";?>
<!DOCTYPE html>
<html>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css" rel="stylesheet">
    <link href="CSS/resolution.css" rel="stylesheet">
    <h2>Ejercicios</h2>
    <ul>
        <li>
            <?php ejercicio1(4);?>
            <div>
                <pre class="lang-php prettyprint prettyprinted">
                    <code><span class="kwd">function</span><span class="pln"> ejercicio1</span><span class="pun">(</span><span class="pln">$n</span><span class="pun">){</span><span class="pln">
                        $sum</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln">
                        echo </span><span class="str">"N = &lt;b&gt;$n&lt;/b&gt;"</span><span class="pun">.</span><span class="str">"&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
                        </span><span class="kwd">for</span><span class="pun">(</span><span class="pln">$i</span><span class="pun">=</span><span class="lit">1</span><span class="pln"> </span><span class="pun">;</span><span class="pln"> $i</span><span class="pun">&lt;(</span><span class="pln">$n</span><span class="pun">*</span><span class="lit">2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">;</span><span class="pln"> $i</span><span class="pun">+=</span><span class="lit">2</span><span class="pun">){</span><span class="pln">
                            $sum</span><span class="pun">+=</span><span class="pln">$i</span><span class="pun">;</span><span class="pln">
                        </span><span class="pun">}</span><span class="pln">
                        echo </span><span class="str">"La suma de los &lt;b&gt;$n&lt;/b&gt; primeros números primos es &lt;b&gt;$sum&lt;/b&gt;"</span><span class="pun">.</span><span class="str">"&lt;br/&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
                    </span><span class="pun">}</span></code>
                </pre>
            </div>
        </li>
        <li>
            <?php ejercicio2(5,1,0);?>
            <div>
                <pre class="lang-php prettyprint prettyprinted">
                    <code><span class="kwd">function</span><span class="pln"> ejercicio2</span><span class="pun">(</span><span class="pln">$n1</span><span class="pun">,</span><span class="pln">$n2</span><span class="pun">,</span><span class="pln">$n3</span><span class="pun">){</span><span class="pln">
                        $arr </span><span class="pun">=</span><span class="pln"> </span><span class="pun">[</span><span class="pln">$n1</span><span class="pun">,</span><span class="pln">$n2</span><span class="pun">,</span><span class="pln">$n3</span><span class="pun">];</span><span class="pln">
                        $arrsize </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="pln">$arr</span><span class="pun">);</span><span class="pln">
                        </span><span class="kwd">for</span><span class="pun">(</span><span class="pln">$i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> $i </span><span class="pun">&lt;</span><span class="pln"> $arrsize</span><span class="pun">;</span><span class="pln"> $i</span><span class="pun">++){</span><span class="pln"> 
                            </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$j </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> $j </span><span class="pun">&lt;</span><span class="pln"> $arrsize </span><span class="pun">-</span><span class="pln"> $i </span><span class="pun">-</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln"> $j</span><span class="pun">++){</span><span class="pln"> 
                                </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$arr</span><span class="pun">[</span><span class="pln">$j</span><span class="pun">]</span><span class="pln"> </span><span class="pun">&gt;</span><span class="pln"> $arr</span><span class="pun">[</span><span class="pln">$j</span><span class="pun">+</span><span class="lit">1</span><span class="pun">]){</span><span class="pln"> 
                                    $t </span><span class="pun">=</span><span class="pln"> $arr</span><span class="pun">[</span><span class="pln">$j</span><span class="pun">];</span><span class="pln"> 
                                    $arr</span><span class="pun">[</span><span class="pln">$j</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> $arr</span><span class="pun">[</span><span class="pln">$j</span><span class="pun">+</span><span class="lit">1</span><span class="pun">];</span><span class="pln"> 
                                    $arr</span><span class="pun">[</span><span class="pln">$j</span><span class="pun">+</span><span class="lit">1</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> $t</span><span class="pun">;</span><span class="pln"> 
                                </span><span class="pun">}</span><span class="pln"> 
                            </span><span class="pun">}</span><span class="pln"> 
                        </span><span class="pun">}</span><span class="pln">
                        echo </span><span class="str">"Números ordenados: "</span><span class="pun">;</span><span class="pln">
                        </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> $i </span><span class="pun">&lt;</span><span class="pln"> $arrsize</span><span class="pun">;</span><span class="pln"> $i</span><span class="pun">++)</span><span class="pln">
                            echo </span><span class="str">"&lt;b&gt;"</span><span class="pun">.</span><span class="pln">$arr</span><span class="pun">[</span><span class="pln">$i</span><span class="pun">].</span><span class="str">"&lt;/b&gt; - "</span><span class="pun">;</span><span class="pln">
                        echo </span><span class="str">"&lt;br/&gt;&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
                    </span><span class="pun">}</span></code>
                </pre>
            </div>
        </li>
        <li>
            <?php ejercicio3(999);?>
            <div>
                <pre class="lang-php prettyprint prettyprinted">
                    <code><span class="kwd">function</span><span class="pln"> ejercicio3</span><span class="pun">(</span><span class="pln">$num</span><span class="pun">){</span><span class="pln">
                        $random</span><span class="pun">=</span><span class="pln">$num</span><span class="pun">;</span><span class="pln">
                        $cont</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln">
                        </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">$random</span><span class="pun">==</span><span class="lit">0</span><span class="pun">){</span><span class="pln">
                            $cont</span><span class="pun">=</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
                        </span><span class="pun">}</span><span class="pln"> </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                            </span><span class="kwd">do</span><span class="pun">{</span><span class="pln">
                                $random</span><span class="pun">=</span><span class="pln">floor</span><span class="pun">(</span><span class="pln">$random</span><span class="pun">/</span><span class="lit">10</span><span class="pun">);</span><span class="pln">
                                $cont</span><span class="pun">++;</span><span class="pln">
                            </span><span class="pun">}</span><span class="kwd">while</span><span class="pun">(</span><span class="pln">$random </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">0</span><span class="pun">);</span><span class="pln">
                        </span><span class="pun">}</span><span class="pln">
                        echo </span><span class="str">"&lt;b&gt;$num&lt;/b&gt; tiene &lt;b&gt;$cont&lt;/b&gt; cifras"</span><span class="pun">.</span><span class="str">"&lt;br/&gt;&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
                    </span><span class="pun">}</span></code>
                </pre>
            </div>
        </li>
        <li>
            <?php ejercicio4();?>
            <div>
                <pre class="lang-php prettyprint prettyprinted">
                    <code><span class="kwd">function</span><span class="pln"> ejercicio4</span><span class="pun">(){</span><span class="pln">
                        $sum</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln">
                        </span><span class="kwd">for</span><span class="pun">(</span><span class="pln">$i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">$i </span><span class="pun">&lt;=</span><span class="pln"> </span><span class="lit">15</span><span class="pun">;</span><span class="pln"> $i</span><span class="pun">++){</span><span class="pln">
                            echo </span><span class="str">"&lt;b&gt;$i&lt;/b&gt;"</span><span class="pun">.</span><span class="str">" "</span><span class="pun">;</span><span class="pln">
                            $sum</span><span class="pun">+=</span><span class="pln">$i</span><span class="pun">;</span><span class="pln">
                        </span><span class="pun">}</span><span class="pln">
                        echo </span><span class="str">"&lt;br/&gt;La suma de los 15 primeros números es: &lt;b&gt;$sum&lt;/b&gt;"</span><span class="pun">.</span><span class="str">"&lt;br/&gt;&lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
                    </span><span class="pun">}</span></code>
                </pre>
            </div>
        </li>
    </ul>
</html>
