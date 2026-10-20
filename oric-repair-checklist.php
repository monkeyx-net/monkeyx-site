<?php
$page_title   = 'Oric Mainboard Repair Checksheet';
$current_page = 'hardware';
require 'includes/head.php';
?>

<h1>// ORIC/ATMOS MAINBOARD REPAIR CHECKSHEET</h1>
<p>▸ <a href="/oric-reference#reference">Back to the Oric reference</a></p>

<div class="command-line">
    <span class="prompt">$ cat CREDITS</span><br>
    MJB's Oric/Atmos Mainboard Repair Checksheet (Version 1.0), © 2008 Mike Brown.<br>
    Original document and photos: <a href="https://oric.signal11.org.uk/html/repairguide.htm">oric.signal11.org.uk/html/repairguide.htm</a><br>
    Converted from the original PDF for this site. Text unchanged apart from formatting and the 2021/02/04 correction to section 3.<br>
    <span class="cursor-blink"></span>
</div>

<div class="blog-post-body doc-schematics">
<p>This is a quick guide to getting a totally dead Oric mainboard to some level of "working". Read it in conjunction with the Oric Schematic diagram (Oric Owner Issue 5, Advanced User Guide by L. Whewell) and the <a href="/docs/oric/oric-service-manual.pdf">Oric Service Manual</a>.</p>
<p>Any specific questions on this document by email to oric@signal11.org.uk</p>
<p>Note: The Oric Service manual suggests tests in an order which is likely to result in a lot of chip changing and probing before finally reaching page 37 where the important "is there any power?" question is asked. This document is laid out in what I feel is a more logical progression of tests, working from highest dependency to lowest.</p>
<p>Guide currents and measurements may vary from system to system, and may vary with the test equipment used. They are included only for guidance.</p>
<p>The diagnostic ROM mentioned and external diagnostic board should be available from the same place you found this document (<a href="https://oric.signal11.org.uk/">oric.signal11.org.uk</a>).</p>
<p>Where ICs are removed for testing or replacement, fit a DIL socket – it will make future repairs or tests much easier and reduce the risk of damage to the PCB traces.</p>

<h2>// 1: VISUAL CHECKS</h2>
<p>Don't overlook the obvious!</p>
<ol>
    <li>Physical damage to tracks, components, soldered joints. Bent pins on keyboard connector, printer port, expansion port.</li>
    <li>Missing parts. Exclude IC10 and IC11 which are either both fitted (early Oric), or both missing (most boards).</li>
    <li>Partly completed/incorrectly applied service bulletins/modifications.</li>
    <li>Other non-standard modifications.</li>
</ol>

<h2>// 2: VERIFY POWER SUPPLY</h2>
<p>Without a working power supply, none of the other testing can be carried out.</p>
<ol>
    <li>Remove ULA and Oric ROM from sockets and store them.</li>
    <li>Check 5v-0v rail resistance against known good board (approx 225R). If lower than 50R skip powering up and go straight to step 2.4</li>
    <li>Power up from a current limited PSU (9V DC/Max 700mA, DC Jack centre positive). If 5v rail is 4.95v to 5.05v, power supply is good, return ULA to socket, and go to section 3.</li>
    <li>See the 7905 photo below. Check C8 next to the DC input jack is not short circuit (replace if needed). Unsolder and lift the "OUT" leg of 7905 from board or cut trace as shown. If +5v is not present between separated (0v) "OUT" and (+5v) "COM" leg, unbolt and replace 7905. Go back to step 2.2 and start again.
        <figure>
            <a href="/images/oric/repair/01_0vrail_7905.webp"><img src="/images/oric/repair/01_0vrail_7905.webp" alt="7905 regulator OUT leg lifted from the 0v rail" loading="lazy"></a>
            <figcaption>01_0vRail_7905 – 7905 regulator, "OUT" leg separated</figcaption>
        </figure>
    </li>
    <li>Separate entire DRAM 0v supply (see the DRAM photo below, 2 PCB cuts at 'A'). Recheck rail resistance and with power applied, total current and rail voltage. If fault clears, one or more DRAM chip is probably faulty, continue to next step. Else go to step 2.8
        <figure>
            <a href="/images/oric/repair/02_0vrail_dram_detail.webp"><img src="/images/oric/repair/02_0vrail_dram_detail.webp" alt="DRAM 0v rail cut points A, B and ground point C" loading="lazy"></a>
            <figcaption>02_0vRail_DRAM_Detail – DRAM 0v rail cuts 'A' and 'B', ground point 'C'</figcaption>
        </figure>
    </li>
    <li>Separate individual DRAM 0v supply (see the DRAM photo above, 6 PCB cuts, some under capacitors, at 'B'). With power applied, check current from actual ground at point 'C' to each DRAM chip pin 16 (marked with circle), which should be about 4mA. Anything over 100mA is a suspect chip. IC 15, 17, 19 may read slightly higher (up to 30mA) than the others due to shared 0v rail with IC21, 20, 8 above them, this is normal.</li>
    <li>Remove all suspect DRAM chips identified from step 6 above. <strong>Important:</strong> test current draw of chip out of circuit with a separate power supply +5v to pin 8, 0v to pin 16 (reversed from normal TTL pinning!). If current is over 80mA discard chip. If current is lower, chip may be reusable – test it in known good system before deciding on discarding or re-using. On IC 15, 17 and 19 – if the current is acceptable when taken out of circuit, double check the current from point 'C' to pin 16 of the NOW EMPTY DRAM IC position for possible fault on neighbouring IC21, 20, 8 (and remove those if necessary). Then go back to step 2.2 and start again.</li>
    <li>Separate power supplies of CPU/ROM (see the CPU/VIA/PSG photo below, 2 PCB cuts at 'D'). ROM should not be installed at this point. Recheck rail resistance and with power applied, total current and rail voltage. Check current from ground at point 'C' to pin 1 of CPU. If fault clears CPU may be faulty, continue to next step. Else go to step 2.10
        <figure>
            <a href="/images/oric/repair/03_0vrail_cpuviapsg_detail.webp"><img src="/images/oric/repair/03_0vrail_cpuviapsg_detail.webp" alt="CPU, VIA and PSG 0v rail cut points D, E and F" loading="lazy"></a>
            <figcaption>03_0vRail_CPUVIAPSG_Detail – CPU/ROM cuts 'D', VIA cut 'E', PSG cut 'F'</figcaption>
        </figure>
    </li>
    <li>Remove suspect CPU. Test current of chip out of circuit with a separate power supply +5v to pin 8, 0v to pin 1 and 21. If current is significantly over (150mA) discard chip. Otherwise test in a known good system before discard or re-use. Go back to step 2.2 and start again.</li>
    <li>Separate power supply of VIA (see the CPU/VIA/PSG photo above, 1 PCB cut at 'E'). Recheck rail resistance and with power applied, total current and rail voltage. Check current from ground at point 'C' to pin 1 of VIA. If fault clears, VIA may be faulty, continue to next step. Else go to step 2.12</li>
    <li>Remove suspect VIA. Test current of chip out of circuit with a separate power supply +5v to pin 20, 0v to pin 1. If current is significantly over 70mA discard chip. Otherwise test in a known good system before discard or re-use. Go back to step 2.2 and start again.</li>
    <li>Separate power supply of PSG (see the CPU/VIA/PSG photo above, 1 PCB cut at 'F'). Recheck rail resistance and with power applied, total current and rail voltage. Check current from ground at point 'C' to pin 6 of PSG. If fault clears, PSG may be faulty, continue to next step. Else go to step 2.14</li>
    <li>Remove suspect PSG. Test current of chip out of circuit with a separate power supply +5v to pin 3 and 19, 0v to pin 6. If current is significantly over 70mA discard chip. Otherwise test in a known good system before discard or re-use. Go back to step 2.2 and start again.</li>
</ol>

<h3>If there is still a power supply fault:</h3>
<p>Make further cuts to the 0v rail to isolate inner sections of the board to narrow down the fault to a particular area (see the full board view below). Check that cutting the trace has actually isolated the area – there are some loops in tracks in the upper left corner of the PCB toward the UHF modulator.</p>
<figure>
    <a href="/images/oric/repair/00_0vrail_fullview.webp"><img src="/images/oric/repair/00_0vrail_fullview.webp" alt="Full view of the Oric mainboard 0v rail" loading="lazy"></a>
    <figcaption>00_0vRail_FullView – the 0v rail across the whole mainboard</figcaption>
</figure>
<p>In each case if the fault clears, and the 5v rail returns, the fault is "beyond" the cut track. Prove this by checking current from an actual ground point to the other side of the last cut trace. None of the remaining chips draw significant current in normal operation, any heavy load found at this stage is the fault.</p>

<h3>Once the power supply is correct at 5v:</h3>
<p>Replace any chips removed above with sockets to make later repairs easier.</p>
<p>Insert known good chips for any removed items above. Any chips that were removed and tested as OK in another board can be returned.</p>
<p>Repair any PCB cuts made above by clearing a small amount of solder resist either side and soldering across the gap. Ensure rail is still at +5v once replacement chips are inserted.</p>
<p>Reinstall the ULA but not the ROM.</p>

<h2>// 3: VERIFY CLOCKS</h2>
<p>The PCB should now have 5v present, drawing under 600mA total. Next ensure that all timing signals are operating as without timing signals it is impossible to test further.</p>
<p>The following TTL clocks must be present, check with an oscilloscope, frequency counter or logic probe:</p>
<ol>
    <li>Ensure 12 MHz clock available at source pin 2 IC21 and destination pin 7 ULA.</li>
    <li>Ensure 1MHz clock available at source pin 14 ULA and destination pin 37 CPU.</li>
    <li>Ensure 1MHz clock available at source pin 3 CPU and destination pin 15 PSG.</li>
    <li>Ensure 1MHz clock available at source pin 39 CPU and destination pin 25 VIA, pin 5 IC21.</li>
    <li>Ensure 1MHz clock available at source pin 6 IC21 and destinations pin 22 IC9, pin 22 IC10.</li>
</ol>
<p>If any clock is entirely missing, low in level, or off frequency, cut the trace between source and destination. Now identify whether the source is failing to provide a clock (still no clock present) OR the destination is overloading clock (clock returned).</p>
<p>Check for damage to traces or accidental short circuit on traces to neighbouring pins, tracks or a thru-hole before suspecting the ICs.</p>
<p>Finally replace IC21, ULA, CPU, PSG or VIA as necessary from above tests until all clocks are present. Repair any PCB cuts made for testing.</p>
<ol start="6">
    <li>Ensure 8.86MHz clock available at IC25 pin 10, 12 and 4 to IC24 pins 11 and 3</li>
    <li>Ensure 4.43MHz clock available at IC24 pins 8, 12 and 5 to IC23 pins 5 and 6.</li>
</ol>
<p><em>Correction (2021/02/04): step 7 originally read "8.86MHz clock"; it should read "4.43MHz clock".</em></p>
<p>Replace IC25 or IC24 as necessary. IC23 is a custom PROM. To replace it, spares must be salvaged from other ORICs or 24S10 (256x4) PROM can be programmed with dump from appendix in L. Whewell's Advanced User Guide.</p>
<p>Once all clocks are established, go on to next section.</p>

<h2>// 4: CHECK SYSTEM ADDRESS/DATA BUS</h2>
<p>Now that there is a chance the system can start up, fit the diagnostic ROM/diagnostic board. The first test is a RAM test which proves out the CPU/ULA/ROM link. If the RAM test executes (whether it passes or fails) there will be continuous pulsed activity on the data bus (D0-D7), and the address bus will be cycling (A0 and A1 rapidly pulsing, possibly other higher address lines). If this is the case, go onto the next section.</p>
<p>If there is no activity on the address and data lines, check D0-D7 and A0-A15 of the system buses as described in the Service Manual p35-37 for lines that are stuck high or low. Remember that CPU is the source of lines A0-A15, all other devices are a load. Replace any defective ICs with socketted parts, and repeat until RAM test passes (or fails with an endless loop of bus activity).</p>
<p>An alternative strategy is to remove the ULA (socketted) and test just the CPU to ROM operation. This can only be easily done with the external diagnostic board in place. With the diagnostic board fitted, use the external 1MHz clock lead to pin 14 of the empty ULA socket. This should cause a RAM test to be performed which will FAIL leaving the CPU cycling endlessly.</p>
<p>If the status LEDs are fitted to the diagnostic board, a status code of "1" (A7-A2 set to 000001) should be seen. Also regular pulses should be found on the CPU SYNC pin (pin 7) indicating opcode fetches from ROM. Phi 1 and Phi 2 clocks (pin 3 and 39) should be 1MHz waves. If this is not the case the CPU is not able to function – either it is faulty or the address and data lines are blocked.</p>

<h2>// 5: APPLY ESSENTIAL SERVICE BULLETINS/MODIFICATIONS</h2>
<p>See Oric Service Manual for full details. Fitting and removing of supply decoupling capacitors skipped.</p>
<p>See the four photos below for physical locations.</p>
<ol>
    <li>Ensure modification 52/53/56 fitting/removal of parts ended up as both parts FITTED.<br>
        Cassette reliability: Pin 18 VIA 1K resistor to +5v (bottom side) at 'A'; 2n2 capacitor to 0v (top side) at 'B'.<br>
        Also PSG Volume: Remove R3 at 'C'. [MJB: Too loud! Optionally: Replace R3 with 1K5-4K7, higher value = higher volume]</li>
    <li>Ensure modification 63b fitted.<br>
        Startup reliability: Cut track from IC21 pin 2 at 'D', insert 220R resistor. Add 560R resistor from ULA pin 7 to +5v at 'E'.</li>
    <li>Ensure Service Bulletin 1 performed on ORIC mainboards. (Not needed for ATMOS)<br>
        PSG BDIR Pulse length fix: Cut track from pin 19 VIA at 'F', bridge gap with 1n0 capacitor. 22K Resistor from PSG pin 18 to pin 6 at 'G'.</li>
    <li>Ensure modification from service manual (no identifier) performed.<br>
        Add 22K resistor from pin 3 IC2 to pin 9 IC25 (ground) at 'H'.</li>
</ol>
<figure>
    <a href="/images/oric/repair/04_modsbotside1.webp"><img src="/images/oric/repair/04_modsbotside1.webp" alt="Modification locations, bottom side, part 1" loading="lazy"></a>
    <figcaption>04_ModsBotSide1 – modifications, bottom side (1)</figcaption>
</figure>
<figure>
    <a href="/images/oric/repair/05_modsbotside2.webp"><img src="/images/oric/repair/05_modsbotside2.webp" alt="Modification locations, bottom side, part 2" loading="lazy"></a>
    <figcaption>05_ModsBotSide2 – modifications, bottom side (2)</figcaption>
</figure>
<figure>
    <a href="/images/oric/repair/06_modstopside1.webp"><img src="/images/oric/repair/06_modstopside1.webp" alt="Modification locations, top side, part 1" loading="lazy"></a>
    <figcaption>06_ModsTopSide1 – modifications, top side (1)</figcaption>
</figure>
<figure>
    <a href="/images/oric/repair/07_modstopside2.webp"><img src="/images/oric/repair/07_modstopside2.webp" alt="Modification locations, top side, part 2" loading="lazy"></a>
    <figcaption>07_ModsTopSide2 – modifications, top side (2)</figcaption>
</figure>

<h2>// 6: RUN DIAGNOSTICS ROM</h2>
<ol>
    <li>To check correct operation of ULA, RAM, VIA, PSG and all related support circuitry, run the diagnostic ROM as per the instructions with it.</li>
    <li>If a test fails, further fault finding will be needed around the indicated area of the mainboard, refer to diagnostic ROM instructions for specific test details and the Oric Service manual for some other hints:
        <div class="code-block"><pre><code>Screen faults (RGB out, UHF out or both): p26-29
Picture quality: p30
Sound faults: p31
Keyboard faults: p32-34, 40</code></pre></div>
    </li>
</ol>

<h2>// 7: SOAK TEST</h2>
<ol>
    <li>If the diagnostic test now passes, fit the keyboard and remount all parts into case.</li>
    <li>Use the diagnostic ROM ULA test cards to check alignment and frequency of UHF output on Channel E-36 for best picture.<br>
        Adjust RV1 so that the yellow part of the test card just starts to turn white.<br>
        Adjust CV1 for least colour fringing on text once Oric is warmed up and stabilized.<br>
        If Diagnostic ROM used internally, return original ORIC ROM. Otherwise disconnect Diagnostic ROM board from expansion port.</li>
</ol>

<p>© 2008 Mike Brown. Reproduced with credit to <a href="https://oric.signal11.org.uk/html/repairguide.htm">oric.signal11.org.uk</a>, where the original checksheet, photos, diagnostic ROM and diagnostic board can be found.</p>
</div>

<?php require 'includes/footer.php'; ?>
